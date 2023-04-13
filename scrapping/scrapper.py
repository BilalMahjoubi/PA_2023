import os
import requests
from bs4 import BeautifulSoup


def get_manga_chapter(manga_name, chapter):
    page_number = 1
    try:
        mangalink = f'https://raw.senmanga.com/{manga_name}/{chapter}'
        response = requests.get(mangalink)
        response_html = response.text
        soup = BeautifulSoup(response_html, 'lxml')

        pages = []
        while True:
            image_tag = soup.find("img", {"class": "picture"})
            if not image_tag:
                break
            image_url = image_tag['src']
            if 'https' not in image_url:
                image_url = 'https:' + image_url
            pages.append({'image_url': image_url})

            # Download and save the image
            img_response = requests.get(image_url)
            folder_name = f"{manga_name}_chapter_{chapter}"
            if not os.path.exists(folder_name):
                os.makedirs(folder_name)
            img_filename = os.path.join(folder_name, f"{page_number}.jpg")
            with open(img_filename, "wb") as img_file:
                img_file.write(img_response.content)

            next_link_div = soup.find("div", {"class": "next"})
            if not next_link_div:
                break
            next_link = next_link_div.find("a")
            if not next_link:
                break
            next_url = next_link['href']
            next_full_url = f'{next_url}'
            next_response = requests.get(next_full_url)
            soup = BeautifulSoup(next_response.text, 'lxml')

        # Return the list of pages
        return pages

    except (AttributeError, requests.exceptions.ConnectionError) as e:
        return {"error": str(e)}


if __name__ == '__main__':
    print(get_manga_chapter(manga_name="mashle", chapter=150))

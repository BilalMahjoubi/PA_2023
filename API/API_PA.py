# Commande pour lancer flask AWS
# SET GLOBAL innodb_lock_wait_timeout = 5000;
# SET innodb_lock_wait_timeout = 5000;
# source ~/pa/env/bin/activate
# export FLASK_APP=api
# export FLASK_ENV=development
# nohup python api.py &

import json
import mysql.connector
from flask import Flask, request
import pymysql

pymysql.install_as_MySQLdb()

app = Flask(__name__)


def connexion_db():
    engine = mysql.connector.connect(host='localhost',
                                     database='pa',
                                     user='root',
                                     password='root')
    return engine


# def connect_db():
#     engine = mysql.connector.connect(host='yougo-db.c6mihiou3qzx.us-east-1.rds.amazonaws.com',
#                                      database='yougodb',
#                                      user='admin',
#                                      password='azertyuiop')
#     return engine


@app.route('/connexion')
def connexion_client():
    connection = connexion_db()
    email = request.args.get('m')
    password = request.args.get('p')
    select = "SELECT * FROM COMPTE WHERE EMAIL='" + email + "' and PASSWORD='" + password + "'"
    cursor = connection.cursor(dictionary=True)
    cursor.execute(select)
    resultat = cursor.fetchall()
    return json.dumps(resultat)


@app.route('/inscription')
def inscription_client():
    connection = connexion_db()
    pseudo = request.args.get('u')
    email = request.args.get('m')
    password = request.args.get('p')
    type_compte = request.args.get('t')
    select = "INSERT INTO COMPTE(`PSEUDO`, `EMAIL`, `PASSWORD`, `TYPE`) VALUES (%s, %s, %s, %s)"
    cursor = connection.cursor(dictionary=True)
    cursor.execute(select, (pseudo, email, password, type_compte))
    connection.commit()
    return "OK"


@app.route('/info_client/<id_user>')
def get_info_client(id_user=int):
    connection = connexion_db()
    select = "SELECT * FROM COMPTE WHERE ID=%s"
    cursor = connection.cursor(dictionary=True)
    cursor.execute(select, (id_user,))
    resultat = cursor.fetchall()
    return json.dumps(resultat)


@app.route('/oeuvre/last_release')
def get_derniere_sortie():
    connection = connexion_db()
    select = "SELECT OEUVRE.ID, OEUVRE.TITRE, OEUVRE.AUTEUR,OEUVRE.IMAGE_COUVERTURE FROM OEUVRE INNER JOIN SCAN ON " \
             "OEUVRE.ID = SCAN.ID_OEUVRE ORDER BY `LAST_RELEASE` DESC;"
    cursor = connection.cursor(dictionary=True)
    cursor.execute(select)
    resultat = cursor.fetchall()
    return json.dumps(resultat)


@app.route('/oeuvre/<id_oeuvre>')
def get_oeuvre_by_id(id_oeuvre=int):
    connection = connexion_db()
    select = "SELECT * FROM oeuvre WHERE ID=%s"
    cursor = connection.cursor(dictionary=True)
    cursor.execute(select, (id_oeuvre,))
    resultat = cursor.fetchall()
    return json.dumps(resultat)


@app.route('/oeuvre/scan/<id_oeuvre>')
def get_scan_by_id(id_oeuvre=int):
    connection = connexion_db()
    select = "SELECT * FROM scan WHERE ID_OEUVRE=%s"
    cursor = connection.cursor(dictionary=True)
    cursor.execute(select, (id_oeuvre,))
    resultat = cursor.fetchall()
    return json.dumps(resultat, default=str)


@app.route('/oeuvre/<id_scan>/<id_page>')
def get_page_by_id(id_scan=int, id_page=int):
    connection = connexion_db()
    select = "SELECT * FROM scan_pages WHERE ID_SCAN=%s AND NUMERO=%s"
    cursor = connection.cursor(dictionary=True)
    cursor.execute(select, (id_scan, id_page))
    resultat = cursor.fetchall()
    return json.dumps(resultat, default=str)


if __name__ == '__main__':
    app.run(host='0.0.0.0', debug=True, port=5000)

from better_profanity import profanity
import mysql.connector

conn=mysql.connector.connect(host="localhost",
                             port='3306',
                             user="root",
                             password="",
                             database="comment_system")

mycursor=conn.cursor()

sql="select * from comments"
mycursor.execute(sql)
records=mycursor.fetchall()

count=mycursor.rowcount


for row in records:
    censored_text = profanity.censor(row[1])
    print(censored_text)
    print("\n")


mycursor.close()
conn.close()













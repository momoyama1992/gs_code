INSERT INTO gs_an_table (name,email,naiyou,indate) VALUES ('山口','test10@jp','ないよう',sysdate())
INSERT INTO gs_an_table (name,email,naiyou,indate) VALUES ('濱島','test1@jp','ないよう',sysdate())
INSERT INTO gs_an_table (name,email,naiyou,indate) VALUES ('田中','test2@jp','ないよう',sysdate())
INSERT INTO gs_an_table (name,email,naiyou,indate) VALUES ('山崎','test3@jp','ないよう',sysdate())
INSERT INTO gs_an_table (name,email,naiyou,indate) VALUES ('平手','test30@jp','ないよう',sysdate())

SELECT * FROM gs_an_table
SELECT name,indate,email FROM gs_an_table

SELECT * FROM gs_an_table WHERE id =1
SELECT * FROM gs_an_table WHERE id = 1 OR id =2
SELECT * FROM gs_an_table WHERE email LIKE '%test1%'

SELECT * FROM gs_an_table ORDER BY id DESC 
SELECT * FROM gs_an_table ORDER BY id DESC LIMIT 3


--変数として入れたい場所だけ「：」
INSERT INTO gs_an_table (name,email,naiyou,indate) VALUES(:name ,:email ,:naiyou ,sysdate())

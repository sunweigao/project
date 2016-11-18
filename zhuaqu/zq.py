#!d:/python/python.exe
# -*- coding: UTF-8 -*-
print
import urllib
import urllib2
import MySQLdb
import re

class News:

    #init
    def __init__(self):
        self.url = "http://news.baidu.com/"

    #sub ''
    def getSub(self, x):
        pattern = re.compile('<div.*?</div>')
        res = re.sub(pattern, '', x)
        return res

    #getUrl
    def getUrl(self):
        url = self.url
        request = urllib2.Request(url)
        response = urllib2.urlopen(request)
        return response.read()

    #getData
    def getData(self):
        page = self.getUrl()
        pattern = re.compile('(<div id="menu".*?)<i class="slogan"></i>', re.S)
        navCode = re.search(pattern, page)
        return navCode.group(1)
        
    #get nav
    def getNav(self):
        navCode = self.getData()
        pattern = re.compile('<a href=("http://.*?/).*?>(.*?)</a>', re.S)
        itmes = re.findall(pattern,  navCode)
        return itmes


db = MySQLdb.connect("127.0.0.1","root","root","python",charset="GBK")
cursor = db.cursor()
newi = News()
new = newi.getNav()
for i in new:
    print i[0],newi.getSub(i[1])
    user = newi.getSub(i[1])
    sql = """INSERT INTO USER(user,pass)VALUES (%s,%s)""" %("'"+user+"'","'"+i[0]+"'")
    try:
        # 执行sql语句
        cursor.execute(sql)
        # 提交到数据库执行
        db.commit()
    except:
        # Rollback in case there is any error
        db.rollback()
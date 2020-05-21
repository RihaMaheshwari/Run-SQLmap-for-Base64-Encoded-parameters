# **Script-to-Run-SQLmap-for-Base64-Encoded-parameters**

This script allows you to run SQLmap in below Json parameters which are base64 encoded. This is done by decoding the existing base64 payload and forming an array of json inputs. SQLmap payloads are inserted into "inject" parameter which is then combined and encoded with base64, thus executing SQLmap in this scenerio.

```
#Json Parameters
{"name1":"test","name2":"test2","name3":"test3"}

#Base64 Encoded
eyJuYW1lMSI6InRlc3QiLCJuYW1lMiI6InRlc3QyIiwibmFtZTMiOiJ0ZXN0MyJ9IA==
```

Example of GET Request formed-
```
GET /?data=eyJuYW1lMSI6InRlc3QiLCJuYW1lMiI6InRlc3QyIiwibmFtZTMiOiJ0ZXN0MyJ9IA== HTTP/1.1
Host: www.target.com
```
## **Steps**
**Step1:** Open sql.php and change the Base64 encoded payload with actual base64 data in Line No. 5 and replace the URL in Line 22 and 24.

**Step2:** Host the Script in any web server. If you are using Kali Linux just type the following command -

```
$ php -S localhost:7000
```

**Step3:** Finally, type the following in terminal to run SQLmap-
```
$ sqlmap -u http://localhost:7000/sql.php?inject="" --dbs
```

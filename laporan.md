# Jobhseet 2 - Routing, Controller, dan View

Nama : Hilyatul Jannah \
Kelas : TI - 2F \
No.Absen/NIM : 28/2341728018

# Membuat 2 buah route

- route '/hello' dengan nilai return 'Hello World' 

Pada tampilan halaman yang telah diketikkan sesuai dengan url, terdapat tulisan "Hello World" 

 ![alt text](pictures/hello.jpg) 

 - route '/world' dengan nilai return 'World' 

 Pada tampilan halaman yang telah diketikkan sesuai dengan url, terdapat tulisan "World" 

 ![alt text](pictures/world.png) 

- route '/' yang menampilkan pesan 'Selamat Datang' 

 Pada tampilan halaman yang telah diketikkan sesuai dengan url, terdapat tulisan "Selamat Datang" 

 ![alt text](pictures/welcome.png) 

 - route ‘/about’ yang akan menampilkan NIM dan nama Anda 

Pada tampilan halaman yang telah diketikkan sesuai dengan url, terdapat tulisan "Nama : Hilyatul Jannah dan NIM : 2341728018" 

 ![alt text](pictures/about.png) 

# route dengan parameter

- route /user/{name} sekaligus mengirimkan parameter berupa nama user $name 

Pada tampilan halaman yang telah diketikkan sesuai dengan url, terdapat tulisan "Hilyatul Jannah Hilya" yang mana "Hilya" merupakan parameter yang dipanggil 

![alt text](pictures/parameter.png) 

- tampilan jika mengetikkan localhost/PWL_2024/public/user/ 

Muncul tulisan 404 NOT FOUND, dikarenakan kita tidak mencantumkan nilai parameternya 

![alt text](pictures/notfound.png) 

- route dengan 2 paramater 

Pada tampilan ini muncul tulisan Pos ke-1 sesuai dengan post_id yang saya ketikkan dan komentar ke-5 sesuai dengan comment_id yang saya ketikkan 

![alt text](pictures/parameters.png) 

- route  /articles/{id} yang akan menampilkan output “Halaman Artikel dengan ID {id}” 

Pada tampilan ini saya mengetikkan id dengan nilai 2, yang mana akan muncul tulisan Halaman Artikel dengan ID - 2 

![alt text](pictures/article.png) 

# Paramater Opsional

- route /user sekaligus mengirimkan parameter berupa nama user $name dimana parameternya bersifat opsional. 

Pada tampilan ini hanya muncul keterangan Nama saya karena saya tidak menginputkan nilai untuk parameter Nama 

![alt text](pictures/myname.png) 

- route dengan url localhost/PWL_2024/public/user/NamaAnda. 

Pada tampilan ini  muncul keterangan Nama saya Hilya karena saya  menginputkan nilai untuk parameter Nama 

![alt text](pictures/mynamehilya.png) 


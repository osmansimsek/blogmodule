# blogmodule

# Hakkında
Hazırlanan program bir yii2 modülüdür. Bu modül blog eklemek üstüne tasarlanmıştır.
Kullanıcı ilk başta eklemek istediği bloglara ait konular girmesi gerekmektedir.
Girilen konular ilgili blog detaylarını ve yazılarını doldurarak bloglar girebilmektedir.
Girilen blogları ya da bloglara ait konuları silebilmekte ya da güncelleyebilmektedir.

# Kurulum

Modülü kullanmak için ilk olarak **Yii2** projesinin bilgisayarınıza kurulu olması gerekmektedir.  Yii2 projenizin bulunduğu dizine gidip **"composer"** aracıyla modülü gerekli paket olarak ekleyin. Bunun için aşağıdaki komutu kullanın.

    composer require osmansimsek/blogmodule "dev-main"
	 
Composer komutunu çalıştırdıktan sonra **vendor** altında **osmansimsek** klasörü arasında modüle ait klasör oluşmaktadır.

Modülümüz için **Konfigüre** ayarları yapmamız gerekmektedir :
  
  1) İlk olarak proje klasörü içindeyken **/backend/config/main.php** dosyasına veya **/frontend/config/main.php** dosyasına girerek aşağıda bulunan kodları eklememiz gerekmektedir.
  
     Eğer ki main.php dosyamızın içindeyken **"modules"** başlığı altında bir ayar satırı bulunmaktaysa aşağıda modules'in içinde bulunan kodları taşımamız yeterli olacaktır.
    
    'modules' => [
        'blogmodule' =>[
            'class' => 'osmansimsek\blogmodule\Module'
        ]
    ],
    
  2) Modülün konfigüre ayarlarını yaptıktan sonra modülde var olan tabloları oluşturmamız için aşağıda bulunan kodları çalıştırmamız gerekmektedir.
  
    php yii migrate/up --migrationPath=@vendor/osmansimsek/blogmodule/src/migrations
   
Modülümüzün kurulumunu tamamladıktan sonra kullanmak için tarayıcıya giderek **url** kısmına aşağıda bulunan adresi girmeniz gerekmektedir.

   **main.php** dosyasını **backend** veya **frontend** dizinlerinden hangisinde ayarladıysanız o linke ait **url** adresini kopyalamanız gerekmektedir.
    
    Frontend : http://blogmodule/frontend/web/index.php?r=blogmodule/home/index.php
    Backend : http://blogmodule/backend/web/index.php?r=blogmodule/home/index.php
    
adreslerinden modülü çalıştırabilirsiniz.

# Modül Kullanımı

Yukarıda verilen adresler üstünden projenin içine kurulan modülü çalıştırdığınız zaman ekrana **"Blog Türü Ekle"** ve **"Blog Ekle"** adında iki adet buton gelmektedir. 

![Main Menü](https://github.com/osmansimsek/blogmodule/blob/main/Project%20%C4%B0mage/Main%20Page.png)

>  -  Blog Türü Ekle

Bu butona tıklanıldığı zaman veri tabanına kaydedilmiş olan bloglara ait konular görüntülenir.

![Blog title page](https://github.com/osmansimsek/blogmodule/blob/main/Project%20%C4%B0mage/Blogtitlepage.PNG)

**"Return Main Menu"** butonuna tıkladığınız zaman ana menüye tekrar dönebilirsiniz.

**"Create"** butonu ile bloglara ait konular girebilirsiniz.

![Blog title create page](https://github.com/osmansimsek/blogmodule/blob/main/Project%20%C4%B0mage/Blogtitlecreatepage.PNG)

>  -  Blog Ekle


   

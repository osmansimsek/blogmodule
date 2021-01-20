# blogmodule

# Hakkında
Hazırlanan program bir yii2 modülüdür. Bu modül blog eklemek üstüne tasarlanmıştır.
Kullanıcı ilk başta eklemek istediği bloglara ait türler girmesi gerekmektedir.
Girilen türlerle ilgili blog detaylarını ve yazılarını doldurarak bloglar girebilmektedir.
Girilen blogları ya da bloglara ait türleri silebilmekte ya da güncelleyebilmektedir.

# Kurulum

Modülü kullanmak için ilk olarak **Yii2** projesinin bilgisayarınıza kurulu olması gerekmektedir.  Yii2 projenizin bulunduğu dizine gidip "**composer**" aracıyla modülü gerekli paket olarak ekleyin. Bunun için aşağıdaki komutu kullanın.

    composer require osmansimsek/blogmodule "dev-main"
	 
Composer komutunu çalıştırdıktan sonra **vendor** altında **osmansimsek** klasörü arasında modüle ait klasör oluşmaktadır.

Modülümüz için **Konfigüre** ayarları yapmamız gerekmektedir :
  
  1) İlk olarak proje klasörü içindeyken **/backend/config/main.php** dosyasına veya **/frontend/config/main.php** dosyasına girerek aşağıda bulunan kodları eklememiz gerekmektedir.
  
     Eğer ki main.php dosyamızın içindeyken 'modules' başlığı altında bir ayar satırı bulunmaktaysa aşağıda modules'in içinde bulunan kodları taşımamız yeterli olacaktır.
    
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

Yukarıda verilen adresler üstünden projenin içine kurulan modülü çalıştırdığınız zaman ekrana iki adet buton gelmektedir. 

![Main Menü](https://github.com/osmansimsek/blogmodule/blob/main/Project%20%C4%B0mage/Main%20Page.png)

  
## Blog Türü Ekle  

İlk buton olan **'Blog türü ekle'** ile bloglara ait olan türleri girebiliriz. Örneğin kullanıcı seyahat veya sinema gibi konularda blog yazacaksa bunları
ilk olarak belirtmesi gerekmektedir. Blog türü eklendikten sonra tabloda eklenilen konu başlığını görebilirsiniz. Blog türünün yan tarafında ise silmek güncellemek ve 
görmek için 3 farklı buton mevcuttur. Bunları kullanarak bloglarınız için değişiklik yapabilirsiniz. **'Blog türü ekle'** butonu ile açılan tabloda bloga ait konuyu 
girdikten sonra **'Return Main Menu'** butonuna basarak ana menüye dönebilirsiniz.
  
## Blog Ekle  
  
İkinci buton olan **'Blog Ekle'** butonu ile blog ekleyebileceğimiz bir sayfa karşımıza çıkmaktadır. Bloglarla ilgili yazı ve diğer detaylar burada belirtilmiştir. **'Blog Ekle'** butonuna bastıktan sonra karşımıza çıkan tabloya yeni kayıt girerek blog ekleyebiliriz. Blogtitle kısmında önceden girilmiş konu başlıklarını kullanabiliriz.
Module eklenmemiş olan konu başlığını yazıp blog eklemeye çalışırsanız geçersiz bir konu başlığı olduğunu size söyleyecektir. Konu başlığı eklemek istediğinizde ise **'Return Main Menu'** butonuna basarak ana menüye gidip **'Blog türü ekle'** deyip o sayfadan istediğiniz bir konu başlığı eklemeniz gerekmektedir. Geçerli konu başlığı ve 
diğer detaylar eklenilip kaydedildiğine blogumuz kaydedilmiş olur. Tabloda eklenen blogu görebilirsiniz. Blogun yan tarafında ise silmek güncellemek ve görmek için 3
farklı buton mevcuttur. Bunları kullanarak bloglarınız için değişiklik yapabilirsiniz. Blog girildiği zaman **'Return Main Menu'** butonuna basarak ana menüye dönebilirsiniz.

# Modül ER Diagramı

   

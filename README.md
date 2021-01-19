# blogmodule

Blog modülünü kullanmak için ilk olarak vagrant aracılığıyla kurulmuş olan bir makine ve bir domain lazımdır.
Vagrant ile kurulmuş makineye ssh ile bağlanmamız gerekmektedir.
Linux makineye girdikten sonrasında makinemizi kurarken verdiğimiz domaine ait klasörün bulunduğu konuma gitmemiz gerekmektedir.

    cd /var/www/
    
ls komutunu kullandığınız zaman sitemize ait klasörün orda olduğunu görmektesiniz.
ilk olarak yii2-advanced proje şablonunu kurmamız gerekmektedir.
Sitemize ait klasörün boş olduğundan emin olun ve packagist aracılığı ile yii2-advanced proje şablonunu indirmelisiniz.

    composer create-project yiisoft/yii2-app-advanced ['Sitenize ait adını giriniz']

yii2-advanced proje şablonunu kurduktan sonra klasörün içine girmeniz gerekmektedir.

    cd ['Sitenize ait klasörün adı']
    
Blog modulünü kullanmak için ilk önce packagistten composer aracılığı ile sitenizin bulunduğu yere dosyaları indirmeniz gerekmektedir.
 
    composer require osmansimsek/blogmodule "dev-main"

komutunu projenizin dosyalarının olduğu yerde terminalde çalıştırmamız gerekmektedir.
Packagist komutunu çalıştırdıktan sonra vendor altında osmansimsek klasörü arasında modüle ait klasör oluşmaktadır.

Modülümüz için configration ayarları yapmamız gerekmektedir :
  
  1) İlk olarak proje klasörü içindeyken /backend/config/main.php dosyasına veya /frontend/config/main.php girerek aşağıda bulunan kodları eklememiz gerekmektedir.
  
    // Eğer ki main.php dosyamızın içindeyken 'modules' başlığı altında bir ayar satırı bulunmaktaysa 
    // aşağıda modules'in içinde bulunan kodları taşımamız yeterli olacaktır.
    
    'modules' => [
        'blogmodule' =>[
            'class' => 'osmansimsek\blogmodule\Module'
        ]
    ],
    
  2) Projenizin ana dizinine giderek aşağıda bulunan kodları çalıştırmamız gerekmektedir.
  
    php yii migrate/up --migrationPath=@vendor/osmansimsek/blogmodule/src/migrations
   
Modülümüzün kurulumunu yaptıktan sonra kullanmak için tarayıcıya giderek url kısmına aşağıda bulunan adresi girmeniz gerekmektedir

    // main.php dosyasını backend veya frontend dizinlerinden hangisinde ayarladıysanız
    // o linke ait url adresini kopyalamanız gerekmektedir.
    
    http://blogmodule/backend/web/index.php?r=blogmodule/home/index.php
    http://blogmodule/backend/web/index.php?r=blogmodule/home/index.php
    
Modülümüz blog eklemek üstüne tasarlanmıştır kullanıcı ilk başta eklemek istediği bloglara ait türler girmesi gerekmektedir.
Girilen türlerle ilgili blog detaylarını ve yazılarını doldurarak bloglar girebilmektedir.

Modül url üstünden çalıştırıldığı zaman ekrana iki adet buton gelmektedir. Bunlar şöyledir:
  
   1) İlk buton olan 'Blog türü ekle' ile bloglara ait olan türleri girebiliriz. Örneğin kullanıcı seyahat veya sinema gibi konularda blog yazacaksa bunları
   ilk olarak belirtmesi gerekmektedir. Blog türü eklendikten sonra tabloda eklenilen konu başlığını görebilirsiniz. Blog türünün yan tarafında ise silmek güncellemek ve 
   görmek için 3 farklı buton mevcuttur. Bunları kullanarak bloglarınız için değişiklik yapabilirsiniz. 'Blog türü ekle' butonu ile açılan tabloda bloga ait konuyu 
   girdikten sonra 'Return Main Menu' butonuna basarak ana menüye dönebilirsiniz.
   
   2) İkinci buton olan 'Blog Ekle' butonu ile blog ekleyebileceğimiz bir sayfa karşımıza çıkmaktadır. Bloglarla ilgili yazı ve diğer detaylar burada belirtilmiştir.
   'Blog Ekle' butonuna bastıktan sonra karşımıza çıkan tabloya yeni kayıt girerek blog ekleyebiliriz. Blogtitle kısmında önceden girilmiş konu başlıklarını kullanabiliriz.
   Module eklenmemiş olan konu başlığını yazıp blog eklemeye çalışırsanız geçersiz bir konu başlığı olduğunu size söyleyecektir. Konu başlığı eklemek istediğinizde ise 
   'Return Main Menu' butonuna basarak ana menüye gidip 'Blog türü ekle' deyip o sayfadan istediğiniz bir konu başlığı eklemeniz gerekmektedir. Geçerli konu başlığı ve 
   diğer detaylar eklenilip kaydedildiğine blogumuz kaydedilmiş olur. Tabloda eklenen blogu görebilirsiniz. Blogun yan tarafında ise silmek güncellemek ve görmek için 3
   farklı buton mevcuttur. Bunları kullanarak bloglarınız için değişiklik yapabilirsiniz.

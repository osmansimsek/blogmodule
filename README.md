# blogmodule

Blog modulünü kullanmak için ilk önce packagistten composer aracılığı ile projemizin bulunduğu yere dosyalarımızı indirmemiz gerekmektedir.
 
    composer require osmansimsek/blogmodule "dev-main"

koumutunu projemizin olduğu yerde çalıştırmamız gerekmektedir.

Packagist komutumuzu çalıştırdıktan sonra vendor altında osmansimsek klasörü arasında projemiz oluşmaktadır.

Modülümüz için configration ayarları yapmamız gerekmektedir :
  
  1) İlk olarak projemizin içindeyken /backend/config/main.php dosyasına veya /frontend/config/main.php girerek aşağıda bulunan kodları eklememiz gerekmektedir.
  
    // Eğer ki main.php dosyamızın içindeyken 'modules' başlığı altında bir ayar satırı bulunmaktaysa 
    // aşağıda modules'in içinde bulunan kodları taşımamız yeterli olucaktır.
    
    'modules' => [
        'blogmodule' =>[
            'class' => 'osmansimsek\blogmodule\Module'
        ]
    ],
    
  2) Projemizin ana dizinine giderek aşağıda bulunan kodları çalıştırmamız gerekmektedir.
  
    php yii migrate/up --migrationPath=@vendor/osmansimsek/blogmodule/src/migrations
   


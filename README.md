#PHP Vize & Final Not Hesaplama (OOP)
Açıklama: Bu proje, üniversite not sistemine uygun olarak öğrencinin Vize ve Final notlarını alıp, belirlenen ortalama ve baraj puanına göre geçme/kalma durumunu hesaplayan bir PHP uygulamasıdır. Kodlama yapısında PHP Nesne Yönelimli Programlama (OOP) prensipleri kullanılmıştır.

Özellikler:

OOP Yapısı: Kodlar VizeFinal sınıfı içerisinde yapılandırılmıştır.

Magic Methods: Sınıf başlatıldığında veri ataması için __construct, sonuçların ekrana basılması için __destruct metodu kullanılmıştır.

Dinamik Hesaplama: Vize (%40) ve Final (%60) oranlarına göre ortalama alır.

Baraj Kontrolü: Final notu 50'nin altındaysa, ortalama tutsa bile öğrenci dersten kalır.

Kullanıcı Arayüzü: HTML form yapısı ile veri girişi sağlanır.

Hesaplama Mantığı:

Vize notunun %40'ı ile Final notunun %60'ı toplanır.

Eğer Final notu 50'den düşükse doğrudan "Kaldınız" uyarısı verir.

Final 50 ve üzeriyse; ortalama 60 ve üzerindeyse "Geçtiniz", değilse "Kaldınız" sonucunu döndürür.

Kurulum: Proje bir sunucu tabanlı dil olan PHP ile yazıldığı için çalıştırmak üzere XAMPP, WAMP veya benzeri bir yerel sunucuya ihtiyacınız vardır. Dosyayı htdocs veya www klasörüne atarak tarayıcıdan çalıştırabilirsiniz.

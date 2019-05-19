<?php

/**
* <h3> Temel Api işlemleri yapan class </h3>
* <p>TCMGM'nden alınan xml verisini çözümleyerek json objesine çevirir.</p>
* @author Barış Meral 
* @version 1.0.0
*/
class API{
    
    private $url; 
    private $sehir;
    private $periyot;
    private $durum;
    private $maxSicaklik;
    private $minSicaklik;
    private $xml;
    private $json;
    
    /**
     * <h2>Sınıf Yapıcı fonksiyonu</h2>
     */
    function __construct()
    {

    $this->url = 'https://www.mgm.gov.tr/FTPDATA/analiz/sonSOA.xml';

    $this->xml = simplexml_load_file($this->url);

        
    }

    /**
     * @version 1.0.0
     * @param string $arg şehir adı
     * @return string json objesi olarak döner 
     */
    public function getHavaDurumu(string $arg){
     $i = 0;

       foreach ($this->xml->children() as $il) {
            $i++;

      $this->sehir = $il->ili;
      $this->sehir = strtolower($this->sehir);
      $this->sehir = to_tr($this->sehir);

            if($this->sehir == $arg ){
               $this->json="{ \"Sehir\": \"";

             $this->durum =  $this->xml->sehirler[$i]->Durum;
             $this->maxSicaklik = $this->xml->sehirler[$i]->Mak;
             $this->minSicaklik = $this->xml->sehirler[$i]->Min;
             $this->periyot = $this->xml->sehirler[$i]->Peryot;
                
            $this->json.=$this->sehir."\",\"Durum\":\"";
            $this->json.=$this->durum."\",\"Periyot\":\"";
            $this->json.=$this->periyot."\",\"MaxSicaklik\":";
            $this->json.=$this->maxSicaklik.",\"MinSicaklik\":";
            $this->json.=$this->minSicaklik."}";
            
            return $this->json; 

            }

       } 
    

    }

        /**
         * @version 1.0.0
         * @return string Json Array
         */
    public function getTumIller(){

        $this->json="[";
        for ($i = 0; $i<32;$i++) {

              $this->sehir =  $this->xml->sehirler[$i]->ili;  
              $this->sehir = strtolower($this->sehir);
              $this->sehir = to_tr($this->sehir);

              $this->durum = $this->xml->sehirler[$i]->Durum;
              $this->maxSicaklik = $this->xml->sehirler[$i]->Mak;
              $this->minSicaklik = $this->xml->sehirler[$i]->Min;
              $this->periyot = $this->xml->sehirler[$i]->Peryot;
                
             $this->json.="{\"Sehir\":\"";
            
             $this->json.=$this->sehir."\",\"Durum\":\"";
             $this->json.=$this->durum."\",\"Periyot\":\"";
             $this->json.=$this->periyot."\",\"MaxSicaklik\":";
             $this->json.=$this->maxSicaklik.",\"MinSicaklik\":";
             $this->json.=$this->minSicaklik."},";

             
        } 

        $this->json = trim($this->json,',');
        $this->json.="]";

        return $this->json;

    }


}

/**
 * <p>Türkçe karakterleri ingilizce karşılıklarına çevirir.</p>
 * @param string türkçe karakter metni
 */
function to_tr($text) {

    $text = trim($text);
    $search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü');
    $replace = array('c','c','g','g','i','i','o','o','s','s','u','u');
    $new_text = str_replace($search,$replace,$text);
    return $new_text;
    }


?>
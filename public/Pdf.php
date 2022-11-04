<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';
;
class Pdf extends TCPDF
{
    //
        //public $lg = Array();
	public $address;
	public $phones;
        public $flag;
        public $image;
        public $print_size;
        public $base_url;
                function __construct()
    {
        parent::__construct();
    }
    public function setData_image($image,$print_size)
    {
        $this->image =$image;
        $this->print_size =$print_size;
    }
    public function setData($address,$phones,$image,$syastem_name,$print_size,$base_url,$flag)
    {
            $lg = Array();
            $lg['a_meta_charset'] = 'UTF-8';
            $lg['a_meta_dir'] = 'ltr';
            $lg['a_meta_language'] = 'ar';
            $this->setLanguageArray($lg);
            $this->address = $address;
            $this->phones = $phones;
            $this->image = $image;
            $this->syastem_name = $syastem_name;
            $this->print_size =$print_size;
            $this->base_url=$base_url;
            $this->flag = $flag;
    }

/*//     public function set_background_a4($img_file) 
//        {
//        // get the current page break margin
//        $bMargin = $this->getBreakMargin();
//        // get current auto-page-break mode
//        $auto_page_break = $this->AutoPageBreak;
//        // disable auto-page-break
//        $this->SetAutoPageBreak(false, 0);
//        // set bacground image
//        //$img_file = base_url('assets\back\imgs\001.jpg');
//        $this->Image($img_file, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
//        // restore auto-page-break status
//        $this->SetAutoPageBreak($auto_page_break, $bMargin);
//        // set the starting point for the page content
//        $this->setPageMark();
//        }
//         public function set_background_a5($img_file) 
//        {
//        // get the current page break margin
//        $bMargin = $this->getBreakMargin();
//        // get current auto-page-break mode
//        $auto_page_break = $this->AutoPageBreak;
//        // disable auto-page-break
//        $this->SetAutoPageBreak(false, 0);
//        // set bacground image
//        //$img_file = base_url('assets\back\imgs\001.jpg');
//        $this->Image($img_file, 0, 0, 176, 250, '', '', '', false, 300, '', false, false, 0);
//        
//        // restore auto-page-break status
//        $this->SetAutoPageBreak($auto_page_break, $bMargin);
//        // set the starting point for the page content
//        $this->setPageMark();
//        }*/
        public function Header_old()
        {
                $this->SetFont('aealarabiya', 'B', 20);
                $this->Cell(0,0, '', 0, false, 'C', 0, '', 0, false, 'M', 'M');
	}

        public function Header() {
        // get the current page break margin
        $bMargin = $this->getBreakMargin();
            if ($this->page == 1) {
        $this->SetMargins(10, 17, 10, true);
        // get current auto-page-break mode
        $auto_page_break = $this->AutoPageBreak;
        // disable auto-page-break
        $this->SetAutoPageBreak(false, 0);
        // set bacground image
        $img_file = $this->image;
        $print_size = $this->print_size;
        $this->SetFont('aealarabiya', 'I', 11);
        //$this->Cell(0, 0, 'TEST CELL STRETCH: no stretch', 1, 1, 'C', 0, '', 0);
        $this->Cell(45, 0, $this->syastem_name, 0, 1, 'C', 0, '', 0);
        //$this->Cell(0,0,$this->syastem_name,0,0,'0');
        $image_file = $this->base_url.'/'.$this->image;
        //$this->Image($image_file, 20, 0, 15, '', '', '', 'T', false, 300, '', false, false, 0, false, false, false);
        
        
         if($print_size == 'B5'){
             //$this->Image($img_file, 0, 0, 176, 250, '', '', '', false, 300, '', false, false, 0);
         }
        else {
            $this->Image($image_file, 20, 4, 15, '', '', '', 'T', false, 300, '', false, false, 0, false, false, false);
        }
           
        // restore auto-page-break status
        $this->SetAutoPageBreak($auto_page_break, $bMargin);
         }
        // set the starting point for the page content
        $this->setPageMark();
      $this->Ln(50);
      
    }
  public function Footer() 
    {
//         if ($this->page == 1) {
//            $this->SetY(-45);
//            
//            // Set a smaller margin after drawing the first page footer.
//            $this->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
//        } else {
//            $this->SetY(-15);
//           
//        }
        //$this->setLanguageArray($lg);
        // Position at 15 mm from bottom
        //$this->SetY(-15);
        // Set font

        $this->SetFont('aealarabiya', 'I', 8);
        $this->footer_line = TRUE;
        if($this->flag ==TRUE)
        {
            $this->SetY(-12);
            //$this->SetFont('times', 'I', 11); 
            //$this->SetTextColor(0,0,0);
            //$this->Write(0, "Page", '', 0, 'C');
        //$this->Cell(80,10,$this->phones,1,0,'l');
        //$this->Cell(70,10,$this->address,1,0,'l');
        $this->Cell(170, 0, $this->address, 0, 1, 'C', 0, '', 0);
        $this->Cell(170, 0, $this->phones, 0, 1, 'C', 0, '', 0);
      //  $this->Cell(170, 0, "Powered by Eng Atef", 0, 1, 'C', 0, '', 0);
        //$this->Cell(270,0,"Powered by Eng Atef- 01126542315-01112211103",0,0,'r');
        }
    }

}

/// End of file Pdf.php /
// Location: ./application/libraries/Pdf.php /

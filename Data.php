<?php 
class Customer {     
    public $namaCustomer;     
    public $alamat;     
    public $telepon;     
    public $email;     
    public $pembelian;      

    public function __construct($namaCustomer = '', $alamat = '', $telepon = '', $email = '', $pembelian = 0) {         
        $this->namaCustomer = $namaCustomer;         
        $this->alamat = $alamat;         
        $this->telepon = $telepon;         
        $this->email = $email;         
        $this->pembelian = $pembelian;     
    }      

    public function tampilkanDataCustomer() {         
        return [
            'Nama' => $this->namaCustomer,
            'Alamat' => $this->alamat,
            'Telepon' => $this->telepon,
            'Email' => $this->email,
            'Jumlah Pembelian' => $this->pembelian,
        ];     
    } 
}  

$customer = null; 
$outputCustomer = [];  

if ($_SERVER["REQUEST_METHOD"] == "POST") {      
    $customer = new Customer(         
        $_POST['namaCustomer'],         
        $_POST['alamat'],         
        $_POST['telepon'],         
        $_POST['email'],         
        intval($_POST['pembelian'])     
    );      
 
    $outputCustomer = $customer->tampilkanDataCustomer(); 
} 
?>
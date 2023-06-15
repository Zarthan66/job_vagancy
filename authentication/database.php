<?php
/**
* Class Database untuk melakukan login dan registrasi user baru dan melakukan CRUD data
*/
class Database
{
    var $host = "localhost";
	var $uname = "root";
	var $pass = "";
    var $database = "2005040041";
    private $db; //Menyimpan Koneksi database
    private $error; //Menyimpan Error Message
    ## Contructor untuk class Database, membutuhkan satu parameter yaitu koneksi ke database ##
    function __construct($db_conn)
    {
        $this->db = $db_conn;
        // Mulai session
        session_start();
    }
    ### Start : Registrasi User baru ###
    public function register($username,$password,$nama,$email,$address)
    {
        try {
            // buat hash dari password yang dimasukkan
            $hashPasswd = password_hash($password, PASSWORD_DEFAULT);
            //Masukkan user baru ke database
            $stmt = $this->db->prepare("INSERT INTO erza(user, koderahasia, nama, surel, alamatkantor) VALUES(:username, :password, :nama, :email, :address)");
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":password", $hashPasswd);
            $stmt->bindParam(":nama", $nama);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":address", $address);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            // Jika terjadi error
            if ($e->errorInfo[0] == 23000) {
            //errorInfor[0] berisi informasi error tentang query sql yg baru dijalankan
            //23000 adalah kode error ketika ada data yg sama pada kolom yg di set unique
            $this->error = "Email sudah digunakan!";
            return false;
            } else {
                echo $e->getMessage();
                return false;
            }
        }
    }
    ### End : Registrasi User baru ### 
    ### Start : fungsi login user ###
    public function login($email, $password)
    {
        try {
        // Ambil data dari database
        $stmt = $this->db->prepare("SELECT * FROM erza WHERE surel = :surel");
        $stmt->bindParam(":surel", $email);
        $stmt->execute();
        $data = $stmt->fetch();
        // Jika jumlah baris > 0
        if ($stmt->rowCount() > 0) {
            // jika password yang dimasukkan sesuai dengan yg ada di database
            if (password_verify($password, $data['koderahasia'])) {
            $_SESSION['user_session'] = $data['idauth'];
            return true;
            } else {
            $this->error = "Email atau Password Salah";
            return false;
            }
        } else {
            $this->error = "Email atau Password Salah";
            return false;
        }
        } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
        }
    }
    ### End : fungsi login user ###
    ### Start : fungsi cek login user ###
    public function isLoggedIn()
    {
        // Apakah user_session sudah ada di session
        if (isset($_SESSION['user_session'])) {
            return true;
        }
    }
    ### End : fungsi cek login user ### 

    ### Start : fungsi ambil data user yang sudah login ###
    public function getUser()
    {
        // Cek apakah sudah login
        if (!$this->isLoggedIn()) {
            return false;
        }
        try {
            // Ambil data user dari database
            $stmt = $this->db->prepare("SELECT * FROM erza
            WHERE idauth = :idauth");
            $stmt->bindParam(":idauth", $_SESSION['user_session']);
            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    ### End : fungsi ambil data user yang sudah login ###
    ### Start : fungsi Logout user ###
    public function logout()
    {
        // Hapus session
        session_destroy();
        // Hapus user_session
        unset($_SESSION['user_session']);
        return true;
    }
    ### End : fungsi Logout user ###
    ### Start : fungsi ambil error terakhir yg disimpan di variable error ###
    public function getLastError()
    {
        return $this->error;
    }
    ### End : fungsi ambil error terakhir yg disimpan di variable error ###

    function tampil_data(){
	$data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->database),"select * from erza");
	while($d = mysqli_fetch_array($data)){
		$hasil[] = $d;
		}
		return $hasil;
	}

    function hapus($id){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->database),"delete from erza where idauth='$id'");
    }

    function edit($id){
        $data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->database),"select * from erza where idauth='$id'");
        
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update($id,$username,$password,$nama,$email,$address){
        $hashPass = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->database),"update erza set user='$username', koderahasia='$hashPass', nama='$nama', surel='$email', alamatkantor='$address' where erza.idauth='$id'");
    }
}
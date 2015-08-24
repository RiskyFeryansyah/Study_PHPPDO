<?php 
	/**
	* Membuat class untuk belajar Create Read Update Delete
	*/
	class crud
	{
		//Membuat Property dan kita beri Hak Akses
		private $host = "localhost";
		private $user = "root";
		private $pass = "akumakan2";
		private $db = "kuliah";
		private $dbh;

		/**
		* Membuat Method Construct agar ketika kita membuat object method construct otomatis di jalankan , 
		* tanpa di panggil
		*/

		function __construct()
		{
			//memakai try catch untuk membuat koneksi agar bisa keliatan saat error
			try {
					$this->dbh = new PDO("mysql:host=".$this->host.";dbname=".$this->db,$this->user,$this->pass);
					$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				} catch (PDOException $e) {
					echo "Koneksi Bermasalah " . $e->getMessage();
				}	
		}

		//membuat method show data untuk melihat isi database
		function show_data($table)
		{
			$this->sql = "SELECT * FROM $table";
			$this->q = $this->dbh->query($this->sql);
			while ($this->r = $this->q->fetch(PDO::FETCH_ASSOC)) {
				$this->data[] = $this->r;
			}
			return $this->data;
		}

		//membuat method tambahkan data
		function insert_data($table,$nama,$alamat)
		{
			$this->nama = $nama;
			$this->alamat = $alamat;
			$this->data = array(
					"nama" => $this->nama,
					"alamat" => $this->alamat
				);
			$this->sql = "INSERT INTO $table( nama, alamat) VALUES( :nama, :alamat)";
			$this->q = $this->dbh->prepare($this->sql);
			$this->q->execute($this->data);
		}

		//membuat method update data
		function update_data($nim)
		{
			$this->nim = $nim;
			$this->sql = "SELECT * FROM mahasiwa where nim=:nim";
			$this->q = $this->dbh->prepare($this->sql);
			$this->q->bindParam(":nim",$this->nim);
			$this->q->execute();
			$this->q->fetchAll();
		}

		function update_save($nim,$nama,$alamat)
		{
			$this->nim = $nim;
			$this->nama = $nama;
			$this->alamat = $alamat;
			$this->data = array(
					"nim" => $this->nim,
					"nama" => $this->nama,
					"alamat" => $this->alamat
				);
			$this->sql = "UPDATE mahasiswa SET nama = :nama, alamat = :alamat WHERE nim = :nim";
			$this->q = $this->dbh->prepare($this->sql);
			$this->q->execute($this->data);
		}

		//membuat method Delete

		function delete_data($nim)
		{
			$this->nim = $nim;
			$this->sql = "DELETE FROM mahasiswa where nim=:nim";
			$this->q = $this->dbh->prepare($this->sql);
			$this->q->bindParam(":nim",$this->nim);
			$this->q->execute();
		}
	}
 ?>
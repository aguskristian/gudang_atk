<?php

	class Gudang_atk extends CI_Controller 
	{
		private $data;
			
		function __construct()
    		{
				parent::__construct();
				$this->load->helper( array( 'url','form' ));	
				$this->load->model('gudang');
			}
				
		function add_gudang()
		{
		
			if ( $this->input->post('submit') ) {
			$data = array(
					
						'id_gudang'          	=> $this->input->post('id_gudang'),
						'no_inventory'    		=> $this->input->post('no_inventory'),
						'kode_akun'        		=> $this->input->post('kode_akun'),
						'serial_number'         => $this->input->post('serial_number')
						'jenis_barang'          => $this->input->post('jenis_barang')
						'spesifikasi'          	=> $this->input->post('spesifikasi')
						'penempatan_awal'       => $this->input->post('penempatan_awal')
						'berita_acara'          => $this->input->post('berita_acara')
						'remaks'          		=> $this->input->post('remaks')
						'update_on'          	=> $this->input->post('update_on')
						'update_by'          	=> $this->input->post('update_by')
						'file_pdf'          	=> $this->input->post('file_pdf')
						'gambar'          		=> $this->input->post('gambar')
						
						);
			$this->gudang->add_gudang( $data );
			}
			$this->load->view('gudang/form_gudang');
		}
		
		function tabel_gudang(){
		
			$data['records'] = $this->gudang->gudang_tabel();
			if ( $this->input->post( 'search' ) ) $data['records'] = $this->gudang->search_gudang( $this->input->post( 'search' ));		
			#menampilkan tabel station
			$this->load->view('gudang/tabel_gudang',$data);	
		
		}
		
		
		function delete($id)
		{
			#delete data station berdasarkan id
			$this->gudang->delete_gudang($id);
			#load view tabel_station
			redirect('gudang/tabel_gudang');
		}
		
		function edit($id)
		{
			$query = $this->gudang->edit_gudang($id);
					 $data['fid_gudang']    	= $query ['id_gudang'];
					 $data['fno_inventory']     = $query ['no_inventory'];
					 $data['fkode_akun'] 		= $query ['kode_akun'];
					 $data['fserial_number']    = $query ['serial_number'];
					 $data['fjenis_barang']     = $query ['jenis_barang'];
					 $data['fspesifikasi']   	= $query ['spesifikasi'];
					 $data['fpenempatan_awal']  = $query ['penempatan_awal'];
					 $data['fberita_acara']   	= $query ['berita_acara'];
					 $data['fremaks']   		= $query ['remaks'];
					 $data['fupdate_on']   		= $query ['update_on'];
					 $data['fupdate_by']   		= $query ['update_by'];
					 $data['ffile_pdf']   		= $query ['file_pdf'];
					 $data['fgambar']   		= $query ['gambar'];
		
			$this->load->view('gudang/edit_gudang',$data);
		}
		
		function submit()
    	{
					#menyimpan nilai input di file sementara dan menyimpan ke field database
                    $id_gudang               	= $this->input->post('id_gudang');
					$no_inventory               = $this->input->post('no_inventory');
					$kode_akun			   		= $this->input->post('kode_akun');
					$serial_number              = $this->input->post('serial_number');
					$jenis_barang              	= $this->input->post('jenis_barang');
					$spesifikasi              	= $this->input->post('spesifikasi');
					$penempatan_awal            = $this->input->post('penempatan_awal');
					$berita_acara              	= $this->input->post('berita_acara');
					$remaks              		= $this->input->post('remaks');
					$update_on              	= $this->input->post('update_on');
					$update_by              	= $this->input->post('update_by');
					$file_pdf              		= $this->input->post('file_pdf');
					$gambar              		= $this->input->post('gambar');
					
					
					$data = array(
					'id_gudang'          =>$id_gudang,
					'no_inventory'       =>$no_inventory,
					'kode_akun'			 =>$kode_akun,
					'serial_number'      =>$serial_number);
					'jenis_barang'       =>$spesifikasi);
					'spesifikasi'        =>$spesifikasi);
					'penempatan_awal'    =>$penempatan_awal);
					'berita_acara'       =>$berita_acara);
					'remaks'             =>$remaks);
					'update_on'          =>$update_on);
					'update_by'          =>$update_by);
					'file_pdf'           =>$file_pdf);
					'gambar'             =>$gambar);
					
					$this->db->where('id_gudang',$id_gudang);
					$this->db->update('gudang_atk',$data);
					
				 	#script mengarahkan ke tabel unit
					redirect('gudang/tabel_gudang');
		}
		
	}
?>
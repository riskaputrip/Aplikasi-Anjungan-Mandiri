<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class anjungan_mandiriModel extends Model
{
	public function get_all()
    {
        $this->db->select("*");
        $this->db->from("anjungan_mandiri");
        $this->db->order_by("nik", "DESC");
        return $this->db->get('peserta_bpjs')->result();
    }

     /**
     * Detail Data Pasien
     */
    public function peserta_bpjs($nik)
    {
        $this->db->select("*");
        $this->db->from("peserta_bpjs");
        $this->db->where("nik", $nik);
        return $this->db->get();
    }

}

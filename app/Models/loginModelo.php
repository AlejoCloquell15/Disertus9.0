<?php
namespace App\Models;

use CodeIgniter\Model;

class LoginModelo extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'IdUsuario';
    protected $allowedFields = ['Nombre', 'Email', 'Contrasena', 'Tipo'];

    public function login($email)
    {
        $sql = $this->db->query("SELECT * FROM usuarios WHERE Email = '{$email}'");
        $userInfo = $sql->getRowArray();
        return $userInfo;
    }

    public function nombre($id)
    {
        $sql = $this->db->query("SELECT * FROM usuarios WHERE IdUsuario = '{$id}'");
        $userInfo = $sql->getRowArray();
        return $userInfo;
    }

    public function sacarIdUsuario($email)
    {
        $sql = $this->db->query("SELECT IdUsuario FROM usuarios WHERE Email = '{$email}'");
        $idu = $sql->getRowArray();
        return $idu;
    }

    public function fechaExpiracion($token)
    {
        $sql = $this->db->query("SELECT Expiracion FROM usuarios WHERE Token = '{$token}'");
        $fechaExpiracion = $sql->getRowArray();
        return $fechaExpiracion;
    }

    public function eliminarToken($id)
    {
        $sql = $this->db->query("UPDATE usuarios SET Token = ?, Expiracion = ? WHERE IdUsuario = ?", [NULL, NULL, $id]);
    }

    public function sacarCorreo($id_usuario)
    {
        $sql = $this->db->query("SELECT Email FROM usuarios WHERE IdUsuario = '{$id_usuario}'");
        $correo = $sql->getRowArray();
        return $correo;
    }

    public function cambiarPassword($hash, $IdUsuario)
    {
        $sql = "UPDATE usuarios SET Contrasena = ? WHERE IdUsuario = ?";
        $this->db->query($sql, [$hash, $IdUsuario]);
    }

    public function sqlUsuario($idUsuario)
    {
        $sql = $this->db->query("SELECT Nombre, Email FROM usuarios WHERE IdUsuario = '{$idUsuario}'");
        $res = $sql->getRow();
        return $res;
    }

    public function editarNombre($nombre, $idUsuario)
    {
        $sql = "UPDATE usuarios SET Nombre = ? WHERE IdUsuario = ?";
        $this->db->query($sql, [$nombre, $idUsuario]);
    }

    public function editarCorreo($correo, $idUsuario)
    {
        $sql = "UPDATE usuarios SET Email = ? WHERE IdUsuario = ?";
        $this->db->query($sql, [$correo, $idUsuario]);
    }

    public function eliminarCuenta($idUsuario)
    {
        echo "hola";
        $sql = $this->db->query("DELETE usuarios, nodemcu FROM usuarios INNER JOIN nodemcu ON nodemcu.IdUsuario = usuarios.IdUsuario WHERE usuarios.IdUsuario = '{$idUsuario}'");
    }
}
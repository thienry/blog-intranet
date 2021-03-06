<?php

namespace Thiago\Model;

use \Thiago\DB\Sql;
use Thiago\Model;
use Thiago\Mailer;

class Notificacao extends Model {
  public static function getNotifications()  {
    $sql = new Sql();
    return $sql->select("SELECT * FROM tb_notificacao ORDER BY id_notificacao DESC");
  }

  public function getSingleNotification($notificationId) {
    $sql = new Sql();
    $results = $sql->select("SELECT * FROM tb_ramais WHERE id_agenda = :id_agenda", array(":id_agenda" => $notificationId));
    $notification = $results[0];
    $this->setData($notification);
}

  public function save() {
    $sql = new Sql();
    $results = $sql->select("CALL sp_notification_save(:nome_pac, :dt_nasc, :prontuario, :registro, :dt_relato, :dt_oco, :hr_oco, :st_cante, :st_cado, :descricao)", array(
      ":nome_pac"=>$this->getnome_pac(),
      ":dt_nasc"=>$this->getdt_nasc(),
      ":prontuario"=>$this->getprontuario(),
      ":registro"=>$this->getregistro(),
      ":dt_relato"=>$this->getdt_relato(),
      ":dt_oco"=>$this->getdt_oco(),
      ":hr_oco"=>$this->gethr_oco(),
      ":st_cante"=>$this->getst_cante(),
      ":st_cado"=>$this->getst_cado(),
      ":descricao"=>$this->getdescricao()
    ));
    $this->setData($results[0]);
  }

  public function sendNotification() {
    $sql = new Sql();
    $results = $sql->select("SELECT * FROM tb_notificacao ORDER BY id_notificacao DESC LIMIT 1");
    $data = $results[0];
    $mailer = new Mailer($data["id_notificacao"], $data["nome_pac"], $data["dt_nasc"], $data["prontuario"], $data["registro"], $data["dt_relato"], $data["dt_oco"], $data["hr_oco"], $data["st_cante"], $data["st_cado"], $data["descricao"], "Notificacao Jayme da Fonte", "email", array(
      "id_notificacao"=>$data["id_notificacao"],
      "name_pac"=>$data["nome_pac"],
      "dt_nasc"=>$data["dt_nasc"],
      "prontuario"=>$data["prontuario"],
      "registro"=>$data["registro"],
      "dt_relato"=>$data["dt_relato"],
      "dt_oco"=>$data["dt_oco"],
      "hr_oco"=>$data["hr_oco"],
      "st_cante"=>$data["st_cante"],
      "st_cado"=>$data["st_cado"],
      "descricao"=>$data["descricao"]
    ));
    $mailer->send();
  }

}

?>
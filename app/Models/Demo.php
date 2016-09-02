<?php
namespace App\Models;

use App\Models\BaseModel;

class Demo extends BaseModel
{

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'ycf_user';
    }

    public function demo()
    {
        $data = $this->select("*", [
            "id" => 1,
        ]);
        var_dump($data);
        var_dump($this->container->db->log());

        // //count
        // $data = $this->count("*", [

        // ]);
        // var_dump($data);
        // //insert
        // $data = $this->insert([
        //     "userId"     => 406,
        //     "catalog"    => time(),
        //     "url"        => "http://www.yaochufa.com/",
        //     "intro"      => "kcloze",
        //     "ip"         => "127.0.0.1",
        //     "createTime" => time(),
        // ]);
        // var_dump($data);
        // $this->select("*", [
        //     "id" => 406,
        // ]);
        // var_dump($data);
        // //原生pdo查询
        // $data = $this->db->query("SELECT email FROM " . $this->getSource())->fetchAll();
        // var_dump($data);
        // var_dump('errors: ', $this->db->error());

        // var_dump($this->db->log());

    }

}

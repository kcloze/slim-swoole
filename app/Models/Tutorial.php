<?php

/*
 * This file is part of PHP CS Fixer.
 * (c) kcloze <pei.greet@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Models;

use App\Library\XUtils;

class Tutorial extends BaseModel
{
    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'tutorials_tbl';
    }

    public function demo()
    {
        $data = $this->select('*', [
            'tutorial_id' => 1,
        ]);
        XUtils::p($data);
        XUtils::p($this->container->db->log());

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

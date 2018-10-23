<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/5/2018
 * Time: 2:11 PM
 */
namespace LPPMKP\Lppm\Models;


class Pengguna extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="id_pengguna", type="integer", length=20, nullable=false)
     */
    public $id_user;

    /**
     *
     * @var string
     * @Column(column="nip_nim", type="string", length=20, nullable=true)
     */
    public $nama_user;

    /**
     *
     * @var string
     * @Column(column="nama", type="string", length=30, nullable=true)
     * @Column(column="nama", type="string", length=30, nullable=true)
     */
    public $email;

    /**
     *
     * @var string
     * @Column(column="email", type="string", length=200, nullable=true)
     */
    public $password;

    /**
     *
     * @var string
     * @Column(column="password", type="string", length=255, nullable=true)
     */

    public function validation()
    {
        $validator = new Validation();

        $validator->add(
            'email',
            new EmailValidator(
                [
                    'model'   => $this,
                    'message' => 'Please enter a correct email address',
                ]
            )
        );

        return $this->validate($validator);
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("db_web_lppm");
        $this->setSource("user_website");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user_website';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Pengguna[]|Pengguna|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Pengguna|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
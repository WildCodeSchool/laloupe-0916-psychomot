<?php

namespace PsychomotBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Psychomot
 */
class Psychomot
{
    public $file;

    protected function getUploadDir()
    {
        return 'uploads';
    }

    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../web/'.$this->getUploadDir();
    }

    public function getWebPath()
    {
        return null === $this->image ? null : $this->getUploadDir().'/'.$this->image;
    }

    public function getAbsolutePath()
    {
        return null === $this->image ? null : $this->getUploadRootDir().'/'.$this->image;
    }
    public function preUpload()
    {
        if (null !== $this->file) {
            // do whatever you want to generate a unique name
            $this->image = uniqid().'.'.$this->file->guessExtension();
        }
    }

    public function upload()
    {
        if (null === $this->file) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file->move($this->getUploadRootDir(), $this->image);

        unset($this->file);
    }

    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }

    //** CODE GENERE **/
    /**
     * @var int
     */
    private $id;

    /**
     * @Assert\Regex(pattern="/^(0|(\\+33)|(0033))[1-9][0-9]{8}$/")
     */
    private $tel;

    /**
     * @var string
     */
    private $titleDef;  

    /**
     * @var string
     */
    private $txtDef;

    /**
     * @var string
     */
    private $titleWho;

    /**
     * @var string
     */
    private $txtWho;

    /**
     * @var string
     */
    private $titleWhy;

    /**
     * @var string
     */
    private $txtWhy;

    /**
     * @var string
     */
    private $titlePsy;

    /**
     * @var string
     */
    private $txtPsy1;

    /**
     * @var string
     */
    private $txtPsy2;

    /**
     * @var string
     */
    private $titleConsult;

    /**
     * @var string
     */
    private $txtConsult;

    /**
     * @var string
     */
    private $titleInterv;

    /**
     * @var string
     */
    private $txtInterv;

    /**
     * @var string
     */
    private $titleBilan;

    /**
     * @var string
     */
    private $txtBilan;

    /**
     * @var string
     */
    private $namePsy1;

    /**
     * @var string
     */
    private $namePsy2;

    /**
     * @var string
     */
    private $contactAdress;

    /**
     * @var string
     */
    private $contactMail;

    /**
     *  @Assert\Regex(pattern="/^(0|(\\+33)|(0033))[1-9][0-9]{8}$/")
     */
    private $contactTel;

    /**
     * @var string
     */
    private $contactName;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Psychomot
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set titleDef
     *
     * @param string $titleDef
     * @return Psychomot
     */
    public function setTitleDef($titleDef)
    {
        $this->titleDef = $titleDef;

        return $this;
    }

    /**
     * Get titleDef
     *
     * @return string 
     */
    public function getTitleDef()
    {
        return $this->titleDef;
    }

    /**
     * Set txtDef
     *
     * @param string $txtDef
     * @return Psychomot
     */
    public function setTxtDef($txtDef)
    {
        $this->txtDef = $txtDef;

        return $this;
    }

    /**
     * Get txtDef
     *
     * @return string 
     */
    public function getTxtDef()
    {
        return $this->txtDef;
    }

    /**
     * Set titleWho
     *
     * @param string $titleWho
     * @return Psychomot
     */
    public function setTitleWho($titleWho)
    {
        $this->titleWho = $titleWho;

        return $this;
    }

    /**
     * Get titleWho
     *
     * @return string 
     */
    public function getTitleWho()
    {
        return $this->titleWho;
    }

    /**
     * Set txtWho
     *
     * @param string $txtWho
     * @return Psychomot
     */
    public function setTxtWho($txtWho)
    {
        $this->txtWho = $txtWho;

        return $this;
    }

    /**
     * Get txtWho
     *
     * @return string 
     */
    public function getTxtWho()
    {
        return $this->txtWho;
    }

    /**
     * Set titleWhy
     *
     * @param string $titleWhy
     * @return Psychomot
     */
    public function setTitleWhy($titleWhy)
    {
        $this->titleWhy = $titleWhy;

        return $this;
    }

    /**
     * Get titleWhy
     *
     * @return string 
     */
    public function getTitleWhy()
    {
        return $this->titleWhy;
    }

    /**
     * Set txtWhy
     *
     * @param string $txtWhy
     * @return Psychomot
     */
    public function setTxtWhy($txtWhy)
    {
        $this->txtWhy = $txtWhy;

        return $this;
    }

    /**
     * Get txtWhy
     *
     * @return string 
     */
    public function getTxtWhy()
    {
        return $this->txtWhy;
    }

    /**
     * Set titlePsy
     *
     * @param string $titlePsy
     * @return Psychomot
     */
    public function setTitlePsy($titlePsy)
    {
        $this->titlePsy = $titlePsy;

        return $this;
    }

    /**
     * Get titlePsy
     *
     * @return string 
     */
    public function getTitlePsy()
    {
        return $this->titlePsy;
    }

    /**
     * Set txtPsy1
     *
     * @param string $txtPsy1
     * @return Psychomot
     */
    public function setTxtPsy1($txtPsy1)
    {
        $this->txtPsy1 = $txtPsy1;

        return $this;
    }

    /**
     * Get txtPsy1
     *
     * @return string 
     */
    public function getTxtPsy1()
    {
        return $this->txtPsy1;
    }

    /**
     * Set txtPsy2
     *
     * @param string $txtPsy2
     * @return Psychomot
     */
    public function setTxtPsy2($txtPsy2)
    {
        $this->txtPsy2 = $txtPsy2;

        return $this;
    }

    /**
     * Get txtPsy2
     *
     * @return string 
     */
    public function getTxtPsy2()
    {
        return $this->txtPsy2;
    }

    /**
     * Set titleConsult
     *
     * @param string $titleConsult
     * @return Psychomot
     */
    public function setTitleConsult($titleConsult)
    {
        $this->titleConsult = $titleConsult;

        return $this;
    }

    /**
     * Get titleConsult
     *
     * @return string 
     */
    public function getTitleConsult()
    {
        return $this->titleConsult;
    }

    /**
     * Set txtConsult
     *
     * @param string $txtConsult
     * @return Psychomot
     */
    public function setTxtConsult($txtConsult)
    {
        $this->txtConsult = $txtConsult;

        return $this;
    }

    /**
     * Get txtConsult
     *
     * @return string 
     */
    public function getTxtConsult()
    {
        return $this->txtConsult;
    }

    /**
     * Set titleInterv
     *
     * @param string $titleInterv
     * @return Psychomot
     */
    public function setTitleInterv($titleInterv)
    {
        $this->titleInterv = $titleInterv;

        return $this;
    }

    /**
     * Get titleInterv
     *
     * @return string 
     */
    public function getTitleInterv()
    {
        return $this->titleInterv;
    }

    /**
     * Set txtInterv
     *
     * @param string $txtInterv
     * @return Psychomot
     */
    public function setTxtInterv($txtInterv)
    {
        $this->txtInterv = $txtInterv;

        return $this;
    }

    /**
     * Get txtInterv
     *
     * @return string 
     */
    public function getTxtInterv()
    {
        return $this->txtInterv;
    }

    /**
     * Set titleBilan
     *
     * @param string $titleBilan
     * @return Psychomot
     */
    public function setTitleBilan($titleBilan)
    {
        $this->titleBilan = $titleBilan;

        return $this;
    }

    /**
     * Get titleBilan
     *
     * @return string 
     */
    public function getTitleBilan()
    {
        return $this->titleBilan;
    }

    /**
     * Set txtBilan
     *
     * @param string $txtBilan
     * @return Psychomot
     */
    public function setTxtBilan($txtBilan)
    {
        $this->txtBilan = $txtBilan;

        return $this;
    }

    /**
     * Get txtBilan
     *
     * @return string 
     */
    public function getTxtBilan()
    {
        return $this->txtBilan;
    }

    /**
     * Set namePsy1
     *
     * @param string $namePsy1
     * @return Psychomot
     */
    public function setNamePsy1($namePsy1)
    {
        $this->namePsy1 = $namePsy1;

        return $this;
    }

    /**
     * Get namePsy1
     *
     * @return string 
     */
    public function getNamePsy1()
    {
        return $this->namePsy1;
    }

    /**
     * Set namePsy2
     *
     * @param string $namePsy2
     * @return Psychomot
     */
    public function setNamePsy2($namePsy2)
    {
        $this->namePsy2 = $namePsy2;

        return $this;
    }

    /**
     * Get namePsy2
     *
     * @return string 
     */
    public function getNamePsy2()
    {
        return $this->namePsy2;
    }

    /**
     * Set contactAdress
     *
     * @param string $contactAdress
     * @return Psychomot
     */
    public function setContactAdress($contactAdress)
    {
        $this->contactAdress = $contactAdress;

        return $this;
    }

    /**
     * Get contactAdress
     *
     * @return string 
     */
    public function getContactAdress()
    {
        return $this->contactAdress;
    }

    /**
     * Set contactMail
     *
     * @param string $contactMail
     * @return Psychomot
     */
    public function setContactMail($contactMail)
    {
        $this->contactMail = $contactMail;

        return $this;
    }

    /**
     * Get contactMail
     *
     * @return string 
     */
    public function getContactMail()
    {
        return $this->contactMail;
    }

    /**
     * Set contactTel
     *
     * @param string $contactTel
     * @return Psychomot
     */
    public function setContactTel($contactTel)
    {
        $this->contactTel = $contactTel;

        return $this;
    }

    /**
     * Get contactTel
     *
     * @return string 
     */
    public function getContactTel()
    {
        return $this->contactTel;
    }

    /**
     * Set contactName
     *
     * @param string $contactName
     * @return Psychomot
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Get contactName
     *
     * @return string 
     */
    public function getContactName()
    {
        return $this->contactName;
    }
    /**
     * @var string
     */
    private $image;


    /**
     * Set image
     *
     * @param string $image
     * @return Psychomot
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }
}

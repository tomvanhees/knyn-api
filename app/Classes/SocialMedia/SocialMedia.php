<?php


namespace App\Classes\SocialMedia;


use App\Classes\QrGenerator;
use App\Models\User;
use App\Models\QrCode;
use Illuminate\Support\Facades\Log;

class SocialMedia
{
    private $user;
    private $type;
    private $qr_code_generator;
    private $qr_code;


    public function __construct()
    {
        $this->qr_code_generator = new QrGenerator();
    }

    /**
     * @param User $user
     * @param string $type
     */
    public function create(User $user,string $type)
    {
        $this->user = $user;
        $this->type = $type;

        $this->qr_code = QrCode::firstOrCreate([
                                                   "user_id" => $user->id,
                                                   "name"    => $this->type,
                                               ],
                                               [
                                                   "path" => ""
                                               ]);
    }

    public function remove($from_database = TRUE)
    {
        if ($this->qr_code->path !== "") {
            $this->qr_code_generator->remove($this->qr_code->path);
        }

        if ($from_database){
            $this->update("");
        }
    }

    public function write($token)
    {
        $this->remove(FALSE);

        $this->qr_code_generator->write($token);
        $this->qr_code_generator->save($this->makePath());

        $this->update($this->qr_code_generator->getFileLocation());
    }


    private function makePath()
    {

        $timestamp = now()->timestamp;


        return $this->user->id . "/qr/" . $timestamp . "_" . $this->type . ".png";
    }

    private function update($path)
    {
        $this->qr_code->update(
            ["path" => $path]);
    }
}




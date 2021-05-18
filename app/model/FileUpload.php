<?php


namespace App\Model;

use App\DB\Connection as DB;
use Exception;

final class FileUpload
{
    public array  $accept = ["jpg", "png", "jpeg", "webp"];
    public object $file;
    public string $filename = "";
    public string $ext = "";
    public string $tmpname = "";
    public string $path = "";


    public function __construct(string $key)
    {
        $this->file = (object) _file($key);
        $name = $this->file->name;
        $ext = pathinfo($name);
        $ext = $ext['extension'];
        $this->ext = $ext;
        $this->tmpname = $this->file->tmp_name;

        $this->filename = _timestamp();
        $this->path = _path();
    }
    /**
     * @param array $accept = ["pdf",".."]
     */
    public function validate(array $accept = [])
    {
        if (count($accept) > 0) {
            $this->accept += $accept;
        }
        if (in_array(strtolower($this->ext), $this->accept) and $this->file->error <= 0) {
            return $this;
        }
        throw new Exception("Upload Valid Image", 1);
    }
    /**
     * @param string $filename = xyz
     * @param string $path = "/../ custom path"
     */
    public function load(string $filename = "", string $path = "")
    {
        if (!empty($path)) {
            $this->path = $path;
        }

        if (!empty($filename)) {
            $this->filename = $filename;
        }
        $file_path =  $this->path . $this->filename . "." . $this->ext;
        if (move_uploaded_file($this->tmpname, $file_path)) {
            return [
                "filename" => $this->filename . "." . $this->ext,
                "alt"      => $this->file->name,
                "url"      => _path('upload_url') . $this->filename . "." . $this->ext
            ];
        } else {
            return false;
        }
    }
}

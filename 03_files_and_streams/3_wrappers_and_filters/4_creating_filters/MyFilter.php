<?php

class MyFilter extends php_user_filter
{
    public $stream;

    public function onCreate() // função chamada ao criarmos uma instância deste filtro
    {
        $this->stream = fopen('php://temp', 'w+');

        return $this->stream !== false;
    }

    public function filter($in, $out, &$consumed, bool $closing)
    {
        $output = '';
        /*$in -> recebe buckets, que podem ser entendidos como pequenos pedaços do arquivo. Quando o arquivo
        é pequeno ele pode recebê-lo por completo;

        Primeiro precisamos o $in(um recurso) em algo manipulável: */
        while ($bucket = stream_bucket_make_writeable($in)) {//Enquanto eu conseguir pegar este bucket manipulável
            $lines = explode("\n", $bucket->data);

            foreach ($lines as $line) {
                if (stripos($line, 'Temporada') !== false) {
                    $output .= "$line\n";
                }
            }
        }

        $outBucket = stream_bucket_new($this->stream, $output);
        stream_bucket_append($out, $outBucket);

        return PSFS_PASS_ON;
    }
}
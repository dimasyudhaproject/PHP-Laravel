<?php
class Costumers
{
    /**
     *
     */
    public function __construct()
    {
    }

    /**
     *
     */
    public function __destruct()
    {
    }
    
    /**
     * Set friendly columns\' names to order tables\' entries
     */
    public function setOrderingValues()
    {
        $ordering = [
            'judul_buku' => 'Judul',
            'description' => 'Description',
            'kategori' => 'Kategori',
            'keyword' => 'Keywords',
            'harga' => 'Harga',
            'penerbit' => 'Penerbit'
        ];

        return $ordering;
    }
}
?>

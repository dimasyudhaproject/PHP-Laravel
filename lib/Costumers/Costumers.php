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
            'id' => 'Judul',
            'f_name' => 'Description',
            'l_name' => 'Kategori',
            'gender' => 'Keywords',
            'phone' => 'Harga',
            'created_at' => 'Penerbit'
        ];

        return $ordering;
    }
}
?>

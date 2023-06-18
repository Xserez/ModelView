<?php 

class view {

    public function search($search) {
        $control = new control();
        $result = $control->search($search);
        return $result;
        
        echo <<<EOT
        <table>
            <tr>
                <th>Adı</th>
                <th>Birim Fiyatı</th>
                <th>Stok</th>
                <th>Resim</th>
            </tr>
        EOT;
    }
}
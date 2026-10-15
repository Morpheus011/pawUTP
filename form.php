<h2>Daftar Ransum</h2>
<table>
    <tr>
        <th>Ransum</th>
        <th>Harga</th>
    </tr>
    <tr>
        <td>Pizza Segitiga Polus</td>
        <td>Rp25.000</td>
    </tr>
    <tr>
        <td>Susu Elektrik Electrical</td>
        <td>Rp18.000</td>
    </tr>
    <tr>
        <td>Space Donut Oxygen</td>
        <td>Rp15.000</td>
    </tr>
    <tr>
        <td>Jus Berry MedBay</td>
        <td>Rp20.000</td>
    </tr>
    <tr>
        <td>Emergency Steak Navigation</td>
        <td>Rp45.000</td>
    </tr>
</table>

<h2>Form Pemesanan</h2>
<form action="proses.php" method="post">
    Nama: <input type="text" name="nama" required><br><br>
    Ransum: <select name="Ransum" id="ransum"> 
        <option value="choose">Choose Ransum</option>
        <option value="Pizza Segitiga Polus">Pizza Segitiga Polus</option> 
        <option value="Susu Elektrik Electrical">Susu Elektrik Electrical</option>
        <option value="Space Donut Oxygen">Space Donut Oxygen</option>
        <option value="Jus Berry MedBay">Jus Berry MedBay</option>
        <option value="Emergency Steak Navigation">Emergency Steak Navigation</option>
    </select><br><br>
    Jumlah:<input type="number" id="quantity" name="quantity" min="1" max="20"><br><br>
    Kategori Pelanggan: <select name="kategori" id="kategori">
    <option value="category">Choose Category</option>
    <option value="crewmate">Crewmate</option>
    <option value="impostor">Impostor</option>
    </select><br><br>
    
    <input type="Submit">
</form>

//1.Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
<br>
<?php
function kiemtraSoChan($so) {
    if (!is_int($so)) {
        echo "Giá trị $so không phải là số nguyên.<br>";
        return;
    }

    if ($so % 2 == 0) {
        echo "Số $so là số chẵn.<br>";
    } else {
        echo "Số $so là số lẻ.<br>";
    }
}
$gia_tri_can_kiem_tra = array(10, 2, 7, 15, 8, "abc", 3.14);
foreach ($gia_tri_can_kiem_tra as $gia_tri) {
    kiemtraSoChan($gia_tri);
}
?>
//2.Viết chương trình PHP để tính tổng của các số từ 1 đến n.
<br>
<?php
function tinhTong($n) {
    $tong = 0;
    for ($i = 1; $i <= $n; $i++) {
        $tong += $i;
    }
    return $tong;
}

$n = 5;
$ket_qua = tinhTong($n);

echo "Tổng của các số từ 1 đến $n là: $ket_qua";
?>
<br>
//3.Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
<br>
<?php
for ($i = 1; $i <= 10; $i++) {
    echo "Bảng cửu chương của $i:<br>";

    for ($j = 1; $j <= 10; $j++) {
        $tich = $i * $j;
        echo "$i x $j = $tich<br>";
    }

    echo "<br>";
}
?>
<br>
//4.Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
<br>
<?php
function kiemtraTu($chuoi, $tu_kiem_tra) {
    $vi_tri = strpos($chuoi, $tu_kiem_tra);

    if ($vi_tri !== false) {
        echo "Chuỗi '$chuoi' chứa từ '$tu_kiem_tra'.";
    } else {
        echo "Chuỗi '$chuoi' không chứa từ '$tu_kiem_tra'.";
    }
}
$chuoi_kiem_tra = "Hello Minh";
$tu_can_kiem_tra = "Minh";

kiemtraTu($chuoi_kiem_tra, $tu_can_kiem_tra);
?>
<br>
//5.Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
<br>
<?php
function findMax($mang) {
    $lon_nhat = $mang[0];
    foreach ($mang as $gia_tri) {
        if ($gia_tri > $lon_nhat) {
            $lon_nhat = $gia_tri;
        }
    }
    return $lon_nhat;
}
function findMin($mang) {
    $nho_nhat = $mang[0];
    foreach ($mang as $gia_tri) {
        if ($gia_tri < $nho_nhat) {
            $nho_nhat = $gia_tri;
        }
    }
    return $nho_nhat;
}

$mang_kiem_tra = array(10, 5, 8, 2, 15);
$lon_nhat = findMax($mang_kiem_tra);
$nho_nhat = findMin($mang_kiem_tra);

echo "Giá trị lớn nhất trong mảng là: $lon_nhat<br>";
echo "Giá trị nhỏ nhất trong mảng là: $nho_nhat";
?>
<br>
//6.Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
<br>
<?php
$mang_can_sap_xep = array(5, 2, 8, 1, 9);
sort($mang_can_sap_xep);

echo "Mảng sau khi sắp xếp tăng dần: ";
print_r($mang_can_sap_xep);
?>
<br>
//7.Viết chương trình PHP để tính giai thừa của một số nguyên dương.
<br>
<?php
function tinhGiaiThua($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * tinhGiaiThua($n - 1);
    }
}

$n = 5;
$ket_qua = tinhGiaiThua($n);

echo "Giai thừa của $n là: $ket_qua<br>";
?>
//8.Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
<br>
<?php
function check_prime($n)
{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0){
            return false;
        }
    }
    return true;
}
 
function show_prime($a, $b){
    for ($i = $a; $i <= $b; $i++){
        if(check_prime($i))
            echo $i, '<br>';
    }
}
 
show_prime(25, 60);
?>
//9.Viết chương trình PHP để tính tổng của các số trong một mảng.
<br>
<?php
function tinhtongMang($mang) {
    $tong = 0;
    foreach ($mang as $gia_tri) {
        $tong += $gia_tri;
    }
    return $tong;
}

$mang_kiem_tra = array(1, 2, 3, 4, 5);

$tong = tinhtongMang($mang_kiem_tra);

echo "Tổng của các số trong mảng là: $tong";
?>
<br>
//10.Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
<br>
<?php
function printFibonacci($bat_dau, $ket_thuc) {
    $so_truoc = 0;
    $so_hien_tai = 1;

    echo "Các số Fibonacci trong khoảng từ $bat_dau đến $ket_thuc là: ";

    while ($so_hien_tai <= $ket_thuc) {
        if ($so_hien_tai >= $bat_dau) {
            echo $so_hien_tai . " ";
        }

        $so_tiep_theo = $so_truoc + $so_hien_tai;
        $so_truoc = $so_hien_tai;
        $so_hien_tai = $so_tiep_theo;
    }
}

$bat_dau = 6;
$ket_thuc = 50;

printFibonacci($bat_dau, $ket_thuc);
?>
<br>
//11.Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
<br>
<?php
function checkArmstrong($so) {
    $so_cuoi = $so;
    $so_chu_so = strlen($so);
    $tong = 0;

    while ($so_cuoi > 0) {
        $chu_so = $so_cuoi % 10;
        $tong += pow($chu_so, $so_chu_so);
        $so_cuoi = (int)($so_cuoi / 10);
    }

    return $tong == $so;
}

$so_kiem_tra = 153;

if (checkArmstrong($so_kiem_tra)) {
    echo "$so_kiem_tra là số Armstrong.";
} else {
    echo "$so_kiem_tra không là số Armstrong.";
}
?>
<br>
//12.Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
<br>
<?php
function chenPhanTu($mang, $gia_tri, $vi_tri) {
    array_splice($mang, $vi_tri, 0, $gia_tri);
    return $mang;
}

$mang_ban_dau = array(1, 2, 3, 4, 5);

$gia_tri_chen = 10;

$vi_tri_chen = 2;

$mang_sau_khi_chen = chenPhanTu($mang_ban_dau, $gia_tri_chen, $vi_tri_chen);

echo "Mảng sau khi chèn giá trị $gia_tri_chen vào vị trí $vi_tri_chen: ";
print_r($mang_sau_khi_chen);
?>
<br>
//13.Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
<br>
<?php
function loaiboLap($mang) {
    $mang_ket_qua = array_unique($mang);
    return $mang_ket_qua;
}

$mang_ban_dau = array(1, 2, 3, 4, 2, 5, 6, 3);

$mang_sau_khi_loai_bo = loaiboLap($mang_ban_dau);

echo "Mảng sau khi loại bỏ phần tử trùng lặp: ";
print_r($mang_sau_khi_loai_bo);
?>
<br>
//14.Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
<br>
<?php
function timViTri($mang, $gia_tri) {
    $vi_tri = array_search($gia_tri, $mang);

    if ($vi_tri !== false) {
        echo "Vị trí của phần tử $gia_tri trong mảng là: $vi_tri";
    } else {
        echo "Phần tử $gia_tri không có trong mảng.";
    }
}

$mang_kiem_tra = array(10, 5, 8, 2, 15);

$gia_tri_can_tim = 8;

timViTri($mang_kiem_tra, $gia_tri_can_tim);
?>
<br>
//15.Viết chương trình PHP để đảo ngược một chuỗi.
<br>
<?php
function daonguocChuoi($chuoi) {
    return strrev($chuoi);
}

$chuoi_kiem_tra = "Hello, World!";
$chuoi_dao_nguoc = daonguocChuoi($chuoi_kiem_tra);

echo "Chuỗi ban đầu: $chuoi_kiem_tra<br>";
echo "Chuỗi sau khi đảo ngược: $chuoi_dao_nguoc<br>";
?>
//16.Viết chương trình PHP để tính số lượng phần tử trong một mảng.
<br>
<?php
function demPhanTu($mang) {
    return count($mang);
}

$mang_kiem_tra = array(1, 2, 3, 4, 5);

$so_luong_phan_tu = demPhanTu($mang_kiem_tra);

echo "Số lượng phần tử trong mảng là: $so_luong_phan_tu<br>";
?>
//17.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
<br>
<?php
function checkPalindrome($chuoi) {
    $chuoi_loai_bo_khoang_trang = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $chuoi));
    $chuoi_nguoc = strrev($chuoi_loai_bo_khoang_trang);

    return $chuoi_loai_bo_khoang_trang === $chuoi_nguoc;
}

$chuoi_kiem_tra = "Pammap";

if (checkPalindrome($chuoi_kiem_tra)) {
    echo "Chuỗi '$chuoi_kiem_tra' là chuỗi Palindrome.";
} else {
    echo "Chuỗi '$chuoi_kiem_tra' không là chuỗi Palindrome.";
}
?>
<br>
//18.Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
<br>
<?php
function demSoLanXuatHien($mang, $phanTu) {
    $soLanXuatHien = array_count_values($mang);
    
    if (isset($soLanXuatHien[$phanTu])) {
        return $soLanXuatHien[$phanTu];
    } else {
        return 0;
    }
}

$mangVidu = array(1, 2, 3, 4, 2, 5, 2, 6, 2);
$phanTuCanDem = 2;

$soLanXuatHien = demSoLanXuatHien($mangVidu, $phanTuCanDem);

echo "Phần tử $phanTuCanDem xuất hiện $soLanXuatHien lần trong mảng.";
?>
<br>
//19.Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
<br>
<?php
function sapXepGiamDan($mang) {
    arsort($mang);
    return $mang;
}

$mangVidu = array(5, 2, 8, 1, 3);
$mangSapXep = sapXepGiamDan($mangVidu);

echo "Mảng sau khi sắp xếp giảm dần: ";
print_r($mangSapXep);
?>
<br>
//20.Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
<br>
<?php
function themVaoDau($mang, $phanTu) {
    array_unshift($mang, $phanTu);
    return $mang;
}

function themVaoCuoi($mang, $phanTu) {
    array_push($mang, $phanTu);
    return $mang;
}

$mangVidu = array(1, 2, 3, 4, 5);
$phanTuCanThem = 0;

$mangSauKhiThemVaoDau = themVaoDau($mangVidu, $phanTuCanThem);
$mangSauKhiThemVaoCuoi = themVaoCuoi($mangVidu, $phanTuCanThem);

echo "Mảng sau khi thêm vào đầu: ";
print_r($mangSauKhiThemVaoDau);
echo "<br>";
echo "Mảng sau khi thêm vào cuối: ";
print_r($mangSauKhiThemVaoCuoi);
?>
<br>
//21.Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
<br>
<?php
function timSoLonThuHai($mang) {
    rsort($mang);

    if (count($mang) >= 2) {
        return $mang[1];
    } else {
        return "Không có số lớn thứ hai trong mảng.";
    }
}

$mangVidu = array(5, 2, 8, 1, 3);
$soLonThuHai = timSoLonThuHai($mangVidu);

echo "Số lớn thứ hai trong mảng là: $soLonThuHai";
?>
<br>
//22.Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
<br>
<?php
function timUSCLN($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function timBSCNN($a, $b) {
    return ($a * $b) / timUSCLN($a, $b);
}

$so1 = 24;
$so2 = 36;

$uscln = timUSCLN($so1, $so2);
$bscnn = timBSCNN($so1, $so2);

echo "Ước số chung lớn nhất của $so1 và $so2 là: $uscln<br>";
echo "Bội số chung nhỏ nhất của $so1 và $so2 là: $bscnn";
?>
<br>
//23.Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
<br>
<?php
function kiemTraSoHoanHao($so) {
    if ($so <= 1) {
        return false;
    }

    $tongUocSo = 1; 

    for ($i = 2; $i <= sqrt($so); $i++) {
        if ($so % $i == 0) {
            $tongUocSo += $i;
            $uocKhac = $so / $i;
            if ($uocKhac != $i) {
                $tongUocSo += $uocKhac;
            }
        }
    }

    return $tongUocSo == $so;
}

$soVidu = 28;

if (kiemTraSoHoanHao($soVidu)) {
    echo "$soVidu là số hoàn hảo.";
} else {
    echo "$soVidu không phải là số hoàn hảo.";
}
?>
<br>
//24.Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
<br>
<?php
function timSoLeLonNhat($mang) {
    $soLeLonNhat = null;

    foreach ($mang as $so) {
        if ($so % 2 != 0) { 
            if ($soLeLonNhat === null || $so > $soLeLonNhat) {
                $soLeLonNhat = $so;
            }
        }
    }

    return $soLeLonNhat;
}

$mangVidu = array(2, 5, 8, 3, 11, 7, 4, 9);
$soLeLonNhat = timSoLeLonNhat($mangVidu);

if ($soLeLonNhat !== null) {
    echo "Số lẻ lớn nhất trong mảng là: $soLeLonNhat";
} else {
    echo "Không có số lẻ trong mảng.";
}
?>
<br>
//25.Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
<br>
<?php
function kiemTraSoNguyenTo($so) {
    if ($so < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($so); $i++) {
        if ($so % $i == 0) {
            return false;
        }
    }

    return true;
}

$soVidu = 17;

if (kiemTraSoNguyenTo($soVidu)) {
    echo "$soVidu là số nguyên tố.";
} else {
    echo "$soVidu không phải là số nguyên tố.";
}
?>
<br>
//26.Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
<br>
<?php
function timSoDuongLonNhat($mang) {
    $soDuongLonNhat = null;

    foreach ($mang as $so) {
        if ($so > 0) { 
            if ($soDuongLonNhat === null || $so > $soDuongLonNhat) {
                $soDuongLonNhat = $so;
            }
        }
    }

    return $soDuongLonNhat;
}

$mangVidu = array(-2, 5, 8, -3, 11, 7, 4, 9);
$soDuongLonNhat = timSoDuongLonNhat($mangVidu);

if ($soDuongLonNhat !== null) {
    echo "Số dương lớn nhất trong mảng là: $soDuongLonNhat";
} else {
    echo "Không có số dương trong mảng.";
}
?>
<br>
//27.Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
<br>
<?php
function timSoAmLonNhat($mang) {
    $soAmLonNhat = null;

    foreach ($mang as $so) {
        if ($so < 0) { 
            if ($soAmLonNhat === null || $so > $soAmLonNhat) {
                $soAmLonNhat = $so;
            }
        }
    }

    return $soAmLonNhat;
}

$mangVidu = array(-2, 5, 8, -3, -11, 7, 4, -9);
$soAmLonNhat = timSoAmLonNhat($mangVidu);

if ($soAmLonNhat !== null) {
    echo "Số âm lớn nhất trong mảng là: $soAmLonNhat";
} else {
    echo "Không có số âm trong mảng.";
}
?>
<br>
//28.Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
<br>
<?php
function tinhTongSoLe($n) {
    $tong = 0;

    for ($i = 1; $i <= $n; $i += 2) {
        $tong += $i;
    }

    return $tong;
}

$nVidu = 10;

$tongSoLe = tinhTongSoLe($nVidu);

echo "Tổng các số lẻ từ 1 đến $nVidu là: $tongSoLe";
?>
<br>
//29.Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
<br>
<?php
function timSoChinhPhuong($batDau, $ketThuc) {
    $soChinhPhuong = array();

    for ($i = $batDau; $i <= $ketThuc; $i++) {
        $canBacHai = sqrt($i);
        if ($canBacHai == floor($canBacHai)) {
            $soChinhPhuong[] = $i;
        }
    }

    return $soChinhPhuong;
}

$batDauVidu = 1;
$ketThucVidu = 100;

$soChinhPhuong = timSoChinhPhuong($batDauVidu, $ketThucVidu);

echo "Các số chính phương trong khoảng từ $batDauVidu đến $ketThucVidu là: ";
print_r($soChinhPhuong);
?>
<br>
//30.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
<br>
<?php
function laChuoiCon($chuoiLon, $chuoiCon) {
    $kichThuocLon = strlen($chuoiLon);
    $kichThuocCon = strlen($chuoiCon);

    if ($kichThuocCon > $kichThuocLon) {
        return false; 
    }

    for ($i = 0; $i <= $kichThuocLon - $kichThuocCon; $i++) {
        $subStr = substr($chuoiLon, $i, $kichThuocCon);
        if ($subStr === $chuoiCon) {
            return true;
        }
    }

    return false;
}

$chuoiLonVidu = "abcdefgh";
$chuoiConVidu = "bcd";

if (laChuoiCon($chuoiLonVidu, $chuoiConVidu)) {
    echo "$chuoiConVidu là chuỗi con của $chuoiLonVidu.";
} else {
    echo "$chuoiConVidu không phải là chuỗi con của $chuoiLonVidu.";
}
?>







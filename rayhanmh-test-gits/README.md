## Terdapat file Index dan file soal yang digunakan untuk mengakses salah satu dari 3 soal yang diberikan untuk memenuhi kondisi menggunakan fungsi tiap soal dengan 3 Input berbeda.

### Berapa ukuran kompleksitas kodinganmu? untuk No.3 Soal No.2:
Kompleksitan dari codingan yang dibuat berada di level sedang dan masih dapat di improve lebih dalam lagi.

### Jelaskan detail kompleksitas codingan Balanced Bracket Anda! No.3 Soal No.3:
Disini saya pada code tersebut menggunakan perulangan for untuk mengiterasi melalui setiap karakter pada input string, dan dari perulangan tersebut terdapat sebuah kompleksitas waktu O(n) dengan Big O nation, yang mana n merupakan panjang dari input string. Lalu, code yang dibuat menggunakan sebuah stack untuk menyimpan karakter-karakter pembuka tanda kurung, kurung kurawal, dan kurung siku, yang mana jumlah maksimum elemen yang disimpan dalam stack yaitu sebanyak karakter pembuka, yang dalam hal ini adalah 3 (yaitu '(', '{', '['), dan maka  kompleksitas ruang dari kode bisa jadi O(1). Kesimpulan yang dapat saya tarik yaitu karena code memiliki kompleksitas waktu O(n) dan kompleksitas ruang O(1) maka kode memiliki efisiensi yang cukup baik.

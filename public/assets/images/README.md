# Image Assets untuk LPH Doa Bangsa Sukabumi

Folder ini berisi image assets yang digunakan di aplikasi LPH Doa Bangsa Sukabumi.

## Authentication Images

Berikut adalah gambar yang dibutuhkan untuk halaman authentication:

### 1. Logo
**Path:** `public/assets/images/logo.png`
- **Digunakan di:** Semua halaman authentication (login, register, forgot password, reset password)
- **Ukuran rekomendasi:** 200x60px (atau ratio serupa)
- **Format:** PNG dengan transparent background
- **Deskripsi:** Logo LPH Doa Bangsa Sukabumi

### 2. Auth Main Image
**Path:** `public/assets/images/auth/auth-img.png`
- **Digunakan di:** Login pages (Pelaku Usaha & Staff), Register page
- **Ukuran rekomendasi:** 500x500px
- **Format:** PNG atau SVG
- **Deskripsi:** Ilustrasi untuk halaman login dan register, bisa berisi:
  - Ilustrasi sertifikasi halal
  - Ilustrasi bisnis/UMKM
  - Ilustrasi keamanan/shield

### 3. Forgot Password Image
**Path:** `public/assets/images/auth/forgot-pass-img.png`
- **Digunakan di:** Forgot Password page, Reset Password page
- **Ukuran rekomendasi:** 500x500px
- **Format:** PNG atau SVG
- **Deskripsi:** Ilustrasi untuk halaman lupa password, bisa berisi:
  - Ilustrasi email/envelope
  - Ilustrasi security key
  - Ilustrasi reset password

## Cara Menambahkan Images

### Opsi 1: Manual Upload
1. Siapkan file gambar sesuai spesifikasi di atas
2. Upload ke folder yang sesuai:
   - Logo: `public/assets/images/logo.png`
   - Auth image: `public/assets/images/auth/auth-img.png`
   - Forgot password: `public/assets/images/auth/forgot-pass-img.png`

### Opsi 2: Copy dari Laratemplate (Jika tersedia)
Jika Anda memiliki akses ke repository [laratemplate](https://github.com/arkhan07/laratemplate), copy images dari:
- `public/assets/images/logo.png`
- `public/assets/images/auth/auth-img.png`
- `public/assets/images/auth/forgot-pass-img.png`

### Opsi 3: Temporary Placeholder
Sementara menunggu gambar final, Anda bisa:
1. Gunakan SVG placeholder dari https://undraw.co/ atau https://storyset.com/
2. Generate logo temporary dari https://logo.com/ atau Canva
3. Gunakan stock images dari https://unsplash.com/

## Rekomendasi Tools untuk Membuat/Edit Images

### Logo Design:
- **Canva** - https://www.canva.com/ (Gratis, mudah digunakan)
- **Figma** - https://www.figma.com/ (Gratis untuk personal)
- **Adobe Illustrator** (Professional, berbayar)

### Illustrations:
- **unDraw** - https://undraw.co/ (Gratis, SVG illustrations)
- **Storyset** - https://storyset.com/ (Gratis, customizable illustrations)
- **Freepik** - https://www.freepik.com/ (Gratis & Premium)

### Photo Editing:
- **Photopea** - https://www.photopea.com/ (Gratis, online Photoshop alternative)
- **GIMP** - https://www.gimp.org/ (Gratis, open source)
- **Remove.bg** - https://www.remove.bg/ (Remove background)

## Guidelines Design

### Warna Brand LPH:
- **Primary:** #166F61 (Teal Green)
- **Secondary:** #125950 (Dark Teal)
- **Light:** #E0F2F1 (Light Teal)
- **Accent:** #10B981 (Success Green)

### Style Guide:
- Gunakan ilustrasi yang modern dan minimalis
- Hindari gambar yang terlalu ramai
- Pastikan gambar sesuai dengan tema halal dan islami
- Gunakan warna yang konsisten dengan brand LPH
- Prioritaskan readability dan clarity

## Current Status

⚠️ **IMAGES BELUM ADA** - Placeholder images perlu ditambahkan.

Aplikasi akan tetap berfungsi tanpa images, namun pengalaman visual akan kurang optimal. Image tags sudah di-setup di semua halaman authentication dan siap menerima file gambar yang sesuai.

## Fallback

Jika gambar tidak ditemukan:
- Aplikasi akan menampilkan alt text
- Layout tetap responsive dan tidak broken
- Semua fungsi authentication tetap berjalan normal

---

**Last Updated:** 2024-12-24

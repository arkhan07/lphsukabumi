<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LPH Doa Bangsa Sukabumi - WhatsApp CS</title>
    <link rel="icon" href="img/halal-logo.png" type="image/x-icon">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #0e5242;
            --secondary-color: #166F61;
            --accent-color: #2E8B57;
            --light-color: #F0F7F4;
            --dark-color: #0A3529;
        }
        
        body {
            font-family: 'Open Sans', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            margin: 0;
        }
        
        .main-container {
            max-width: 900px;
            width: 100%;
            background: white;
            border-radius: 25px;
            box-shadow: 0 20px 40px rgba(14, 82, 66, 0.15);
            overflow: hidden;
            border: 1px solid rgba(14, 82, 66, 0.1);
        }
        
        .header-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .header-section::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }
        
        .header-section::after {
            content: '';
            position: absolute;
            bottom: -30px;
            left: -30px;
            width: 150px;
            height: 150px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
        }
        
        .logo-container {
            width: 120px;
            height: 120px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            border: 5px solid rgba(255, 255, 255, 0.3);
        }
        
        .logo-container i {
            font-size: 50px;
            color: var(--primary-color);
        }
        
        .title {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 10px;
            letter-spacing: -0.5px;
        }
        
        .subtitle {
            font-size: 1.3rem;
            opacity: 0.9;
            margin-bottom: 5px;
        }
        
        .content-section {
            padding: 50px 40px;
            text-align: center;
        }
        
        .loading-container {
            position: relative;
            width: 180px;
            height: 180px;
            margin: 0 auto 40px;
        }
        
        .spinner {
            width: 100%;
            height: 100%;
            border: 8px solid rgba(14, 82, 66, 0.1);
            border-top: 8px solid var(--primary-color);
            border-radius: 50%;
            animation: spin 1.5s linear infinite;
            position: absolute;
            top: 0;
            left: 0;
        }
        
        .whatsapp-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 40px;
            box-shadow: 0 8px 20px rgba(37, 211, 102, 0.3);
            z-index: 2;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .loading-text {
            font-size: 1.8rem;
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 20px;
        }
        
        .redirect-text {
            font-size: 1.1rem;
            color: #555;
            max-width: 600px;
            margin: 0 auto 30px;
            line-height: 1.6;
        }
        
        .contact-info {
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--light-color);
            padding: 20px;
            border-radius: 15px;
            margin: 30px auto;
            max-width: 400px;
            border: 2px dashed var(--accent-color);
        }
        
        .phone-number {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-left: 15px;
        }
        
        .btn-whatsapp {
            background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
            color: white;
            border: none;
            padding: 16px 40px;
            font-size: 1.2rem;
            font-weight: 600;
            border-radius: 50px;
            margin-top: 20px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(37, 211, 102, 0.3);
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        
        .btn-whatsapp:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(37, 211, 102, 0.4);
            color: white;
        }
        
        .btn-whatsapp i {
            margin-right: 10px;
            font-size: 1.4rem;
        }
        
        .features {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 40px;
        }
        
        .feature-item {
            background: var(--light-color);
            padding: 20px;
            border-radius: 15px;
            width: 180px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        
        .feature-item:hover {
            transform: translateY(-5px);
        }
        
        .feature-icon {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        .feature-text {
            font-weight: 600;
            color: var(--dark-color);
            font-size: 0.95rem;
        }
        
        .countdown {
            font-size: 1.1rem;
            color: var(--primary-color);
            font-weight: 600;
            margin-top: 10px;
        }
        
        .footer {
            background: var(--light-color);
            padding: 20px;
            text-align: center;
            color: var(--dark-color);
            font-size: 0.9rem;
            border-top: 1px solid rgba(14, 82, 66, 0.1);
        }
        
        @media (max-width: 768px) {
            .title {
                font-size: 2rem;
            }
            
            .subtitle {
                font-size: 1.1rem;
            }
            
            .content-section {
                padding: 40px 25px;
            }
            
            .loading-container {
                width: 150px;
                height: 150px;
            }
            
            .whatsapp-icon {
                width: 70px;
                height: 70px;
                font-size: 35px;
            }
            
            .phone-number {
                font-size: 1.5rem;
            }
            
            .features {
                gap: 15px;
            }
            
            .feature-item {
                width: 160px;
                padding: 15px;
            }
        }
        
        @media (max-width: 576px) {
            .header-section {
                padding: 30px 20px;
            }
            
            .content-section {
                padding: 30px 20px;
            }
            
            .title {
                font-size: 1.7rem;
            }
            
            .loading-text {
                font-size: 1.5rem;
            }
            
            .contact-info {
                flex-direction: column;
                text-align: center;
            }
            
            .phone-number {
                margin-left: 0;
                margin-top: 10px;
            }
            
            .features {
                flex-direction: column;
                align-items: center;
            }
            
            .feature-item {
                width: 100%;
                max-width: 250px;
            }
        }
    </style>
</head>

<body>
    <div class="main-container">
        <div class="header-section">
            <div class="logo-container">
                <i class="fas fa-hands-praying"></i>
            </div>
            <h1 class="title">LPH Doa Bangsa Sukabumi</h1>
            <p class="subtitle">Lembaga Pemeriksa Halal Terdaftar BPJPH</p>
        </div>
        
        <div class="content-section">
            <div class="loading-container">
                <div class="spinner"></div>
                <div class="whatsapp-icon">
                    <i class="fab fa-whatsapp"></i>
                </div>
            </div>
            
            <h2 class="loading-text">Menghubungkan Anda dengan Tim Halal Kami</h2>
            
            <p class="redirect-text">
                Tunggu sebentar, Anda akan segera terhubung dengan Customer Service kami di WhatsApp. 
                Kami siap membantu semua kebutuhan sertifikasi halal Anda.
            </p>
            
            <div class="contact-info">
                <i class="fab fa-whatsapp fa-2x" style="color: #25D366;"></i>
                <div class="phone-number">+62 8788 0044 738</div>
            </div>
            
            <div class="countdown" id="countdown">Mengarahkan dalam: <span id="timer">3</span> detik</div>
            
            <a href="https://api.whatsapp.com/send?phone=6285100431111&text=Halo.%20Saya%20ingin%20bertanya%20tentang%20sertifikasi%20halal%20dari%20LPH%20Doa%20Bangsa%20Sukabumi" 
               class="btn btn-whatsapp" target="_blank">
                <i class="fab fa-whatsapp"></i> Chat WhatsApp Sekarang
            </a>
            
            <div class="features">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div class="feature-text">Sertifikasi Resmi BPJPH</div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="feature-text">Proses Cepat & Mudah</div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="feature-text">Tim Auditor Berpengalaman</div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div class="feature-text">Konsultasi Gratis</div>
                </div>
            </div>
        </div>
        
        <div class="footer">
            <p>&copy; 2023 LPH Doa Bangsa Sukabumi. Semua hak dilindungi.</p>
            <p>Terdaftar resmi di Badan Penyelenggara Jaminan Produk Halal (BPJPH)</p>
        </div>
    </div>

    <script>
        // Countdown timer
        let seconds = 3;
        const timerElement = document.getElementById('timer');
        const countdownElement = document.getElementById('countdown');
        
        const countdown = setInterval(function() {
            seconds--;
            timerElement.textContent = seconds;
            
            if (seconds <= 0) {
                clearInterval(countdown);
                countdownElement.innerHTML = "Mengarahkan ke WhatsApp...";
                
                // Redirect to WhatsApp
                setTimeout(function() {
                    window.location.href = 
                        "https://api.whatsapp.com/send?phone=6287880044738&text=Halo.%20Saya%20ingin%20bertanya%20tentang%20sertifikasi%20halal%20dari%20LPH%20Doa%20Bangsa%20Sukabumi";
                }, 500);
            }
        }, 1000);
        
        // Add animation to feature items on hover
        document.querySelectorAll('.feature-item').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.boxShadow = '0 10px 20px rgba(14, 82, 66, 0.15)';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.boxShadow = 'none';
            });
        });
        
        // Add pulsing animation to WhatsApp button
        const whatsappBtn = document.querySelector('.btn-whatsapp');
        setInterval(function() {
            whatsappBtn.style.transform = 'scale(1.05)';
            setTimeout(function() {
                whatsappBtn.style.transform = 'scale(1)';
            }, 500);
        }, 2000);
    </script>
</body>

</html>

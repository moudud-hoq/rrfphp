<?php include_once ('header.php'); ?>
<section id="home" class="section">
    <h2>Home</h2>
    <p>Welcome to the home section of our website. Here, you will find the latest updates and news about our services and offerings. We strive to keep our content fresh and relevant to ensure you have the best experience possible.</p>
    <p>Our team is dedicated to providing top-notch services and support. We believe in building strong relationships with our clients and delivering solutions that meet their needs. Stay tuned for more exciting updates and features that we will be rolling out soon.</p>
    <p>Thank you for visiting our website. We hope you find the information you are looking for and enjoy browsing through our content. If you have any questions or feedback, please do not hesitate to reach out to us. We are here to help and support you in any way we can.</p>
</section>

<section id="gallery" class="section"></section>
    <h2>Gallery</h2>
    <div class="image-grid">
        <div class="image-box">
            <img src="images/image1.jpg" alt="Image 1">
            <p>Image Description 1</p>
        </div>
        <div class="image-box">
            <img src="images/image2.jpg" alt="Image 2">
            <p>Image Description 2</p>
        </div>
        <div class="image-box">
            <img src="images/image3.jpg" alt="Image 3">
            <p>Image Description 3</p>
        </div>
        <div class="image-box">
            <img src="images/image4.jpg" alt="Image 4">
            <p>Image Description 4</p>
        </div>
        <div class="image-box">
            <img src="https://via.placeholder.com/150" alt="Fake Image">
            <p>Fake Image Description</p>
        </div>
    </div>
</section>

<style>
    .image-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }
    .image-box {
        flex: 1 1 calc(25% - 20px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.3s;
    }
    .image-box img {
        width: 100%;
        height: auto;
        display: block;
    }
    .image-box p {
        padding: 10px;
        text-align: center;
        background-color: #f8f8f8;
        margin: 0;
    }
    .image-box:hover {
        transform: scale(1.05);
    }
    @media (max-width: 768px) {
        .image-box {
            flex: 1 1 calc(50% - 20px);
        }
    }
    @media (max-width: 480px) {
        .image-box {
            flex: 1 1 100%;
        }
    }
</style>


<?php include_once ('footer.php'); ?>

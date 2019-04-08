<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 13.03.2019
 * Time: 20:24
 */
use Imagine\Gd\Imagine;
use Imagine\Image\Box;
use PHPMailer\PHPMailer\PHPMailer;
use \FPDF;

Class SiteController extends Controller {

    public function home() {
        //Get all items
        $news = new NewsModel();
        $data['list_news'] = $news->getAll();

        //Begin Render
        $this->render('_header', ['title'=>'Bosh sahifa']); // Head side
        $this->render('home', $data); // Content
        $this->render('_footer'); // Footer side
    }

    public function news() {
        $news = new NewsModel();
        $data['list_news'] = $news->getAll();
        $this->render('news', $data);
    }

    public function about() {

        $this->render('_header', ['title'=>'Biz haqimizda']); // Head side
        $this->render('about'); // Content
        $this->render('_footer'); // Footer side
    }

    public function contact() {
        $alert = null;
        if ($_POST) {
            $name = $_POST['Name'];
            $email = $_POST['Email'];
            $phone = $_POST['phone'];
            $subject = $_POST['Subject'];
            $message = $_POST['Message'];

            global $params;
            $adminEmail = $params['adminMail'];
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'djialhsho@gmail.com';
            $mail->Password   = 'diljah9197';
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            $mail->setFrom($email, $name);
            $mail->addAddress($adminEmail);
            $mail->Subject = $subject;
            $mail->Body = $message . PHP_EOL . "Telefon: " . $phone;
            $result = $mail->send();
            $alert = $result ? 'success' : 'error';
        }

        $this->render('_header', ['title'=>'Bog`lanish']);
        $this->render('contact',[
            'alert' => $alert
        ]);
        $this->render('_footer');
    }

    public function createNews(){
        $title = trim(isset($_GET['title']) ? $_GET['title'] : '');
        $body = trim(isset($_GET['body']) ? $_GET['body'] : '');
        if (!empty($title) && !empty($body) )
        {
            $new = new NewsModel();
            $new->create($title, $body);
        }
        else
        {
            echo "Bo`sh bo`lmasligi kerak!";
        }

    }

    public function searchNews() {
        $key = $_GET['key'];
        $news = new NewsModel();
        $items = $news->search($key);
        var_dump($items);
    }

    public function updateNews() {
        $id = $_GET['id'];
        $title = trim(isset($_GET['title']) ? $_GET['title'] : '');
        $body = trim(isset($_GET['body']) ? $_GET['body'] : '');
        $news = new NewsModel();
        $news->update($id, $title, $body);
    }

    public function deleteNews() {
        $id = $_GET['id'];
        $news = new NewsModel();
        $news->deleteById($news->table, $id);
    }

    public  function image() {
//        $input_image = imagecreatefromjpeg('assets/uploads/banner-1.jpg');
//        $cropped = imagecrop($input_image, [
//            'x' => 500,
//            'y' => 500,
//            'width' => 420,
//            'height' => 420
//        ]);

//        $cropped = imagecropauto($input_image);
//        imagejpeg($cropped, 'assets/uploads/thumb-banner-1.jpg');
        $file = "assets/uploads/banner-1.jpg";
        $image = new Imagine();
        $size = new Box(600, 500);
        $new_name = "assets/uploads/thumb-banner-1.jpg";
//        $image->open($file)->resize($size)->save($new_name);
        $image->open($file)->thumbnail($size)->rotate(-45)->save($new_name);
    }

    public function mail() {
        $users_email = ['example_to@gmail.com'];
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'example_from@gmail.com';
        $mail->Password   = 'password';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('noreply@lesson.com', 'Mailer');

        foreach ($users_email as $email) {
            $mail->addAddress($email);
        }

        $mail->isHTML(true);
        $mail->Subject = "Mavzu";
        $mail->Body = '<div style="background: green; color: white;"><h2>Bu yerda sarlavha</h2></div> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
        $mail->addAttachment('assets/images/banner-1.jpg', 'GirlName.jpg');
        $mail->send();
    }

    public function pdf()
    {
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->SetTitle('Resume');
        $pdf->Cell(400,5,'Resume');
        $pdf->Ln(10);
        $pdf->SetFont('Arial','',12);
        $pdf->Image('assets/images/banner-1.jpg', 10, 20, 80, 80);
        $pdf->Cell(80);
        $pdf->Write(15, "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");

        $pdf->Output();
    }

}
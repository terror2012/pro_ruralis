<?php

namespace App\Console\Commands;

use App\Eloquent\general_settings;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;

class init extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'custom:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initializing general settings and admin account, if init is true';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $init_status = general_settings::where('name', '=', 'init')->first();
        if(!$init_status)
        {
            $init_status = new general_settings();
            $init_status->name = 'init';
            $init_status->value= 1;
            $init_status->save();
            $init_status = 1;
            $this->info('Init set to 1');
        }
        else
        {
            $init_status = $init_status->value;
        }
        if($init_status == 1)
        {
            $about_pic = 'img/about-img.jpg';
            $about_us = htmlentities(' <p> Proiectul a fost inițiat în anul școlar 2001-2002 de către „Ziarul de Iași”, fiind realizat în parteneriat cu Inspectoratul '.
                'Școlar Județean Iași. Această idee a aparținut redactorului șef al Grupului de Presă Medianet, Toni Hritac și inspectorului școlar general Mihai Dumitriu. </p> <p> Unul dintre membrii fondatori,'.
                'prof. Victor Geangalau a înființat tot în anul 2001, cu ajutorul Ziarului de Iași, Asociația „Pro Ruralis” care gestionează proiectul. </p> <p> Prin proiectul „Burse pentru elevi din mediu rural '.
                'cu coeficient de inteligență superior proveniți din familii defavorizate din mediul rural”, pentru prima dată în România, comunitatea a participat, în mod direct, la rezolvarea unei probleme '.
                'ce părea până atunci, fără soluție: salvarea de la ignoranța a câtorva dintre cei mai buni copii de la țara și facilitarea accesului lor la o educație de calitate care, din cauza sărăciei '.
                'familiilor de proveniența, le era refuzată. </p> <p> În urma unei intense campanii mediatice mai mulți oameni de afaceri și șefi de instituții publice din Iași s-au oferit să participe la proiect, '.
                'dăruind burse (în prezent de 800 Euro pe an școlar de elev), reprezentând contravaloarea minima a cheltuielilor de masă și cazare. </p> <p> În vederea susținerii proiectului s-a înființat Asociația '.
                '„PRO RURALIS” Iași cu 11 membri fondatori, cuprinzând principalele instituții publice prin reprezentanții lor, o organizație non profit, câțiva oameni de afaceri și persoane particulare. </p> <p> '.
                'Asociația „PRO RURALIS” Iași funcționează legal pe teritoriul României, fiind conform Statutului „o organizație de persoane fizice și juridice, neguvernamentală, fără scop patrimonial, '.
                'autonomă și apolitică cu personalitate juridica”. În același timp acordă copilului dreptul de a-și exprima opinia în orice chestiune sau procedura care îl afectează, (respectând '.
                'direct articolul 12 al Convenției cu Privire la Drepturile Copilului, adoptată de către Adunarea Generală a Națiunilor Unite în noiembrie 1989). </p> <p> Scopurile asociației sunt de a selecta '.
                'elevii, de a aduna și gestiona fondurile, de a prezenta sponsorilor rapoarte periodice privind cheltuielile efectuate, de a asigura integritatea elevilor, de a-i monitoriza pe parcursul '.
                'studiilor, precum și de a atrage alți sponsori, pentru ca în fiecare an, alți copii din mediu rural ieșean, inteligenți dar săraci, să poată studia la școli de elită din oraș. </p> <p> Obiectivele '.
                'proiectului se încadrează în „Strategia de dezvoltare a zonelor defavorizate” preconizată de Consiliul Județean Iași, Ministerul Educației Cercetării și Tineretului și Guvernul României, '.
                'dar Asociația nu primește nici un fel de sprijin guvernamental. </p> <p> Dacă activitatea desfășurată va obține suficient sprijin, „PRO RURALIS” Iași dorește să scolarizeze anual un număr limitat de '.
                'copii, concomitent cu sponsorizarea celor deja integrați în program, până la terminarea liceului și, eventual, a unui institut de învățământ superior în vederea integrării lor sociale. </p> <p> '.
                'Îndemnul sponsorilor este: „Merita să investim în ei și în sufletele lor, merită să îi încurajăm în aspirațiile lor inocente, pentru că ei vor fi oamenii viitorului, pilonii pe care se va '.
                'construi societatea românească de mâine". </p> ');
            $obj_1 = 'title=>Educational*/*image=>img/advanced-feature-1.jpg*/*description=>Cuprinderea acestor copii în școli de elită din orașul Iași pentru a le oferi condiții civilizate de studiu și de cultivare '.
                'a personalității. Școlile care îi pregătesc au profesori renumiți, cese implică cu dăruire în procesul instructiv-educativ. Printr-o pregătire intensivă acești copii învață disciplina muncii, '.
                'recuperând lacunele din cunoștințele lor la fiecare disciplină de învățământ. Acești copii sunt implicați în activități extrașcolare în vederea dezvoltării abilităților creative și comportamentale.';
            $obj_2 = 'title=>Social*/*image=>img/advanced-feature-2.jpg*/*description=>Ameliorarea condițiilor de viață a acestor elevi în internatele unor licee de prestigiu din Iași. Redresarea condiției lor fizice și psihice '.
                'printr-o strictă supraveghere medicală și asistentă psihopedagogică. Indirect, îmbunătățirea condițiilor de viață a familiilor lor prin degrevarea acestora de cheltuielile pentru întreținerea și îngrijirea '.
                'copiilor cuprinși în proiect.';
            $obj_3_html = htmlentities('<ul> <li> Continuarea proiectului an de an și dezvoltarea lui prin formarea de noi clase </li> <li> Asigurarea condițiilor materiale de '.
                'învățământ și de educație ale copiilor selecționați </li> <li> O strânsă legătură cu mijloacele mass-media care popularizează proiectul </li> <li> O colaborare eficientă cu toți factorii implicați: sponsori, '.
                'colaboratori, elevi, părinți, directori de școli etc </li> <li> Obținerea unor diplome, la nivel național, de recunoaștere a importanței proiectului și asociației </li> </ul>');
            $obj_3 = 'title=>Planuri de viitor*/*image=>img/advanced-feature-3.jpg*/*description=> '.$obj_3_html;

            $objectives = [$obj_1, $obj_2, $obj_3];

            $settings = ['header1'=>'Sa intindem mana inteligentei!', 'header2'=>'Sa ajutam elevii sa isi implineasca visul', 'mission'=>'Asociatia “Pro Ruralis” Iasi are misiunea de a concepe si implementa proiecte,'.
                'interne si externe, cu caracter educativ, cultural si social pentru copiii cu IQ superior (coeficient de inteligenta minimum 120), provenind din familii defavorizate de la tara. In acest sens, asociatia va '.
                'gestiona si in al cincisprezecelea an de invatamant, proiectul “Burse pentru elevi cu coeficient de inteligenta superior, proveniti din familii defavorizate din mediul rural”.', 'categ_prize'=>'Campanii de '.
                'Atragere de fonduri,Servicii Sociale pentru Categorii Defavorizate,Educatie si Cercetare,Consecventa (din partea juriului presei),Gala Oameni Pentru Oameni,Excelenta','city'=>'Iasi', 'address'=>'Str. '.
                '14 decembrie 1989, nr. 2B','address2'=>'etajul 1','room'=>'camerele 7-8','email' => 'dorina.hotoleanu@yahoo.com', 'phone'=>'+40-740-065562', 'init'=>'0', 'partners' => 'img/clients/ziarul_de_iasi.png=>'.
                'https://www.ziaruldeiasi.ro/,img/clients/rotary.png=>http://www.rotaryiasi.ro/,img/clients/antibiotice.png=>http://www.antibiotice.ro/,img/clients/salubris.png=>http://salubris.ro/,img/clients/unirea.png=>'.
                'https://www.hotelunirea.ro/,img/clients/star_of_hope.png=>http://www.starofhope.ro/', 'twitter'=>'https://twitter.com/', 'facebook'=>'https://www.facebook.com/', 'instagram'=>'https://www.instagram.com',
                'google'=>'https://plus.google.com/','about_pic'=>$about_pic,'about_us'=>$about_us,'company_name'=>'Asociatia Pro Ruralis', 'company_address'=>'Iasi, Str. 14 decembrie 1989, nr. 2B, etajul 1, camerele 7-8',
                'cod_fiscal'=>'14597970', 'bank_type'=>'BCR', 'bank_account'=>'RO32RNCB0175033612900001','contact_person_name'=>'Dorina Hotoleanu', 'contact_person_phone'=>'0740065562'];

            $staff_1 = 'img=>img/team/placeholder400x400.jpg,name=>Dorina Hotoleanu,title=>Director Asociatiei';
            $staff_2 = 'img=>img/team/placeholder400x400.jpg,name=>Toni Hritac,title=>Redactor Sef Ziarul De Iasi';
            $staff_3 = 'img=>img/team/placeholder400x400.jpg,name=>Victor Geangalau,title=>Reprezentant Asociatie';
            $staff_4 = 'img=>img/team/placeholder400x400.jpg,name=>Dan Carlan,title=>Prefectul Iasi';
            $staff_5 = 'img=>img/team/placeholder400x400.jpg,name=>Victorel Lupu,title=>Presedintele Consiliului Judetean Iasi';
            $staff_6 = 'img=>img/team/placeholder400x400.jpg,name=>Mihai Chirita,title=>Primar al Municipiului Iasi';

            $staff = [$staff_1, $staff_2, $staff_3, $staff_4, $staff_5, $staff_6];

            $faq_1 = 'title=>Non consectetur a erat nam at lectus urna duis?,body=>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.';
            $faq_2 = 'title=>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?,body=>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.';

            $faq = [$faq_1, $faq_2];

            foreach($settings as $key=>$value)
            {
                if(general_settings::where('name', '=', $key)->count() == 0)
                {
                    $gen_settings = new general_settings();
                    $gen_settings->name = $key;
                    $gen_settings->value = $value;
                    $gen_settings->save();
                    $this->info('Setting ' . $key . ' initialized');
                }
                else
                {
                    $this->error('Setting ' . $key . ' already exists, can\'t init');
                }
            }
            if(general_settings::where('name', '=', 'objectives')->count() == 0)
            {
                foreach($objectives as $obj)
                {
                    $gen_settings = new general_settings();
                    $gen_settings->name = 'objectives';
                    $gen_settings->value = $obj;
                    $gen_settings->save();
                    $this->info('Setting objectives inialized');
                }
            }
            else
            {
                $this->error('Setting objectives already exists, can\'t init');
            }
            if(general_settings::where('name', '=', 'staff')->count() == 0)
            {
                foreach($staff as $stf)
                {
                    $gen_settings = new general_settings();
                    $gen_settings->name = 'staff';
                    $gen_settings->value = $stf;
                    $gen_settings->save();
                    $this->info('Setting staff inialized');
                }
            }
            else
            {
                $this->error('Setting staff already exists, can\'t init');
            }
            if(general_settings::where('name','=','faq_donation')->count() == 0)
            {
                foreach($faq as $f)
                {
                    $gen_settings = new general_settings();
                    $gen_settings->name = 'faq_donation';
                    $gen_settings->value = $f;
                    $gen_settings->save();
                    $this->info('Setting faq_donation inialized');
                }
            }
            else
            {
                $this->error('Setting faq_donation already exists, can\'t init');
            }

            if(User::where('name', '=', 'admin')->get()->count() == 0)
            {
                try
                {
                    $user = new User();
                    $user->name = 'admin';
                    $user->email = 'admin@admin.com';
                    $user->password = Hash::make('admin');
                    $user->account_type = 3;
                    $user->save();
                    $this->info('Admin Account Initialized');
                } catch (QueryException $e)
                {
                    $this->error($e->getMessage());
                }
            }
            else
            {
                $this->error('Admin account already exists!');
            }
        }
        else
        {
            $this->error('Initialization is set to 0, to initialize, please set it to 1');
        }
        $init_set = general_settings::where('name', '=','init')->first();
        $init_set->value = 0;
        $init_set->save();
        $this->info('Initialization finished, setting init back to 0');
    }
}

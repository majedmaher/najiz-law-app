<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Setting::create([
            'logo' => 'assets/images/logo.webp',
            'main_title' => [
                'ar' => 'مكتب الراشد للمحاماة والاستشارات القانونية',
                'en' => 'Al-Rashed Law Firm and Legal Consultations'
            ],
            'description_main' => [
                'ar' => 'مختص في تحصيل اموال الضحايا من الجرائم الالكترونية و مكافحة شركات الفوركس و التداول الوهمية المحتالة',
                'en' => 'Specialized in collecting victims’ money from electronic crimes and combating fraudulent forex and trading companies'
            ],
            'who_are_we_title' => [
                'ar' => 'مكتب الراشد للمحاماة',
                'en' => 'Al-Rashed Law Firm'
            ],
            'image_who_ar_we' => 'assets/images/who-are-we.webp',
            'description_who_are_we' => [
                'ar' => 'مكتب محاماة دولي مستقل أسسه الدكتور سليمان الراشد و يعد مكتب الراشد للمحاماة من المكاتب الرائدة و القادرة على خدمة شبكة عمل عالمية من العملاء مع محامين دوليين في جميع أنحاء العالم متخصصة في مجال استرداد الأموال المسروقة والمنهوبة من شركات التداول “الفوركس” النصابة وشركات الوساطة المالية الوهمية والتي تكبد الناس يوميا ألاف الدولارات. تتعامل الشركة باحترافية عالية وتساعد مئات المستخدمين على استرجاع أموالهم بإجراءات قانونية صارمة من خلال طاقم من المحامين المحترفين والمتخصصين في مجال استرداد الأموال المنهوبة ومطاردة الشركات الوهمية.',
                'en' => 'An independent international law firm founded by Dr. Sulaiman Al-Rashed. Al-Rashed Law Firm is one of the leading offices capable of serving a global network of clients with international lawyers all over the world specialized in the field of recovering stolen and looted funds from fraudulent “Forex” trading companies and phantom financial brokerage companies Which cost people thousands of dollars every day. The company deals with high professionalism and helps hundreds of users to recover their money through strict legal procedures through a team of professional lawyers and specialists in the field of recovering looted funds and chasing fake companies.'
            ],
            'description_footer' => [
                'ar' => 'شركة الشريف محامون ومستشارون هي شركة محاماة سعودية تقدم خدمات قانونية في مجموعة واسعة من المجالات، ويشمل ذلك: عمليات الشركات، والمسائل التجارية والعقارية، والسوق المالية، الزكاة والضرائب، والتقاضي، كما نقدم خدماتنا للعملاء محلياً ودولياً.',
                'en' => 'Al-Sharif Lawyers and Consultants is a Saudi law firm that provides legal services in a wide range of fields, including: corporate operations, commercial and real estate matters, the financial market, zakat and taxes, and litigation. We also provide our services to clients locally and internationally.'
            ],
            'whatsapp' => 'https://wa.me/message/WFX4WCSCHY4FM1',
            'twitter' => 'http://twitter.com/',
            'linkedin' => 'http://linkedin.com/',
            'address' => [
                'ar' => 'مبنى نافذة الأعمال – الدور الأول طريق أبي بكر الصديق – حي التعاون الرياض – المملكة العربية السعودية – 12477',
                'en' => 'Business Window Building - First Floor, Abu Bakr Al-Siddiq Road - Al-Taawun District, Riyadh - Kingdom of Saudi Arabia - 12477'
            ],
            'phone_number' => '+0114855800',
            'email_address' => 'info@alshareeflaw.sa',
            'worktime' => [
                'ar' => 'الأحد - الخميس: 09:00 - 18:00',
                'en' => 'Sunday - Thursday: 09:00 - 18:00'
            ],
            'latitude' => '24.728282',
            'longitude' => '46.609324',

            'description' => [
                'ar' => 'شركة محاماة سعودية تقدم خدمات قانونية في مجموعة واسعة من المجالات، مثل: المسائل التجارية، والسوق المالية، والتقاضي، كما نقدم خدماتنا للعملاء محلياً ودولياً.',
                'en' => 'A Saudi law firm that provides legal services in a wide range of fields, such as: commercial matters, the financial market, and litigation. We also provide our services to clients locally and internationally.'
            ],
        ]);

        $this->call([
            UserSeeder::class,
            ServiceSeeder::class,
            ClientSeeder::class,
            LicensesSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

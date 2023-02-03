<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
              [
                'question' => 'Why should I donate blood ?',
                'answer' => 'You have to donate blood yourself to find out. By Blood donation you greatly contribute towards a healthier, happier society by making available safe blood. Any one may need blood at any time may be ourselves or our near  ones. You also benefit in other ways by donating blood as it reduces the chances of ischemic heart diseases'
              ],    
              [
                'question' => 'Are their any side effects of Blood donations ?',
                'answer' => 'here are no side effects of blood donation. The Blood bank staff ensures that your blood donation is a good experience as far as possible to enable you to become a repeat and a regular blood donor. There are a number of people who have donated   more tha25-100 times in their life time'
              ],
              [
                'question' => 'Can I get any disease like AIDS or Hepatitis or any other disease by Blood donation ?',
                'answer' => 'As only sterile disposables are used to collect  blood and these disposables can be used only one time it eliminates any chances of acquiring any disease from blood donation.'
              ],
              [
                'question' => 'What are the eligibility criteria of blood donation ?',
                'answer' => 'AThe eligible donors  should be  between 18 to 60 years of age, having a healthy pattern of lifestyle  The body weight should be above 45 kgs.  The haemoglobin should be above 12.5 g%'
              ],
              [
                'question' => 'How often can I donate Blood ?',
                'answer' => 'After every three –four months you can donate blood.'
              ],
              [
                'question' => 'What should I eat before blood-donation ?',
                'answer' => 'Anything that you normally eat at home., Eat a  light snacks and a cold drink  before blood donation  is sufficient..'
              ],
              [
                'question' => 'How much  time does it take to donate blood ?',
                'answer' => 'You will be asked to fill a donor form. Your medical history will be taken by a medical personnel and  a small drop of blood to check blood group as well as  Hb for anemia. After  simple medical screening process and being found medically fit to donate, you will be sent to blood collection  room. The actual blood collection from the donor takes about 7-10 minutes followed by a little rest and refreshments.'
              ],
            ];

          foreach($datas as $data){
            Faq::create($data);
          }
    }
}

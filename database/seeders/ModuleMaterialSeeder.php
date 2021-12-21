<?php

namespace Database\Seeders;

use App\Models\ModuleMaterial;
use Illuminate\Database\Seeder;

class ModuleMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModuleMaterial::insert([
            [
                "idModule" => "098123907121",
                "data"  => '<div class="anyipsum-output" style="text-align: justify;">
                <h1>Pertemuan 1</h1>
                <p>&nbsp;<img src="https://images.unsplash.com/photo-1592280771190-3e2e4d571952?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1867&amp;q=80" alt="FT UMRAH Senggarang" width="283" height="213" /></p>
                <p>Bacon ipsum dolor amet dolor officia ground round magna t-bone ut pastrami prosciutto in ea ribeye dolore. Ea ut pastrami pork dolore, culpa beef ut duis aliquip frankfurter ex sunt. Alcatra incididunt capicola kevin pork loin occaecat. Alcatra commodo meatball, turkey hamburger brisket burgdoggen.</p>
                <p>Turkey sed ea, turducken reprehenderit rump exercitation culpa eiusmod venison. Bacon cupidatat dolore pork belly ea ut pig et dolore tempor non capicola veniam culpa. Ullamco magna in, short loin chislic minim id non do hamburger culpa ut. Alcatra culpa prosciutto duis, laboris turkey ex. Salami nostrud drumstick tail. Dolor id occaecat duis cupidatat ground round bacon cupim shank picanha culpa ut corned beef enim cillum. Drumstick burgdoggen nisi excepteur occaecat velit commodo aliquip prosciutto cupidatat reprehenderit.</p>
                <p>Beef ribs salami shankle tri-tip, bacon kielbasa chislic pig reprehenderit meatball brisket. Ground round cow mollit ham hock. Leberkas shank drumstick ea filet mignon lorem. Consectetur bacon veniam tongue swine. Occaecat pork loin est short ribs buffalo.</p>
                <ul>
                <li>Senin 19 Okrtober 20202</li>
                <li>Masuk jam 07.30</li>
                <li>3 SKs</li>
                </ul>
                <p>Sausage nisi corned beef voluptate, in tri-tip cow. Magna ground round andouille voluptate, turducken ex adipisicing sed flank labore. Ut leberkas pork loin, officia short ribs voluptate venison ut lorem burgdoggen in consectetur aliquip dolore magna. Ham hock tempor pancetta, frankfurter nulla exercitation est shankle ipsum excepteur pork. Cow frankfurter drumstick tenderloin ipsum. Picanha swine consequat pork belly ea officia tempor salami quis adipisicing minim jowl ut.</p>
                <p>Cupidatat ut boudin minim, consequat voluptate t-bone esse eu sausage sed dolore velit aliquip. Do jerky salami, pastrami kevin bresaola porchetta anim. Chislic jowl alcatra ut fatback sausage chuck anim tri-tip pork loin cow. Pork chop ullamco flank kielbasa, minim nulla ham kevin. Dolore magna jerky sirloin cow sunt frankfurter aliquip do turducken dolore in jowl. Pork consequat shank biltong capicola spare ribs, brisket et turkey prosciutto dolor strip steak. Dolore leberkas ea filet mignon, nisi eiusmod consectetur porchetta ut brisket sint pig.</p>
                </div>
                <div class="anyipsum-form-header" style="text-align: justify;">Does your lorem ipsum text long for something a little meatier? Give our generator a try&hellip; it&rsquo;s tasty!</div>'
            ],
            [
                "idModule" => "098123907122",
                "data" => '<div class="anyipsum-output" style="text-align: justify;">
                <h1>Pengenalan Web</h1>
                </div>'
            ]
        ]);
    }
}

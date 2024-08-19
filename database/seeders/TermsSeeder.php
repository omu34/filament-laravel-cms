<?php

namespace Database\Seeders;

use App\Models\Sections\Terms;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TermsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Terms::create([
            'title' => 'Co-operative Bank T&Cs',
            'description' => 'The relationship between the Bank and the Customer is governed by the following general terms and conditions and subject to any further agreement in writing except where the said terms and conditions are in conflict with the Laws of Kenya in which case the Laws of Kenya will take precedence. Specific terms shall apply to specific accounts and products or service and are available to the Customer upon request.<br><br><p>Definitions</p><br><ol><li>“This Agreement” means the agreement between the Bank and the Account holder, the terms of which are these Conditions of use as may be varied from time to time.</li><li>“We”, “Our”, “Us”, “The Bank” means Co-operative Bank of Kenya Limited.</li><li>“Customer”, “You”, “Your” means any or all persons named on the application form for the Co-operative Bank of Kenya Limited Account, Mobile Banking or Internet Banking Service;</li><li>“Bank Account” means any account maintained by the Bank, which the accountholde(s) is/are entitled to operate, in respect of which the accountholder(s) has/have requested to be able to give transaction instructions.</li><li>“ATM” means Automatic Teller Machines</li><li>“Card” means the Visa Electron debit card issued by the Bank at the request and in the name of the person named upon it for use in connection with debit card facilities provided by the Bank.</li><li>“Cardholder” means any authorized user for whose use the Bank issues a Card.</li><li>“Authorized User” a person nominated to whom the Bank shall have issued a Card.</li><li>“Transaction Instruction” means any instruction given by the customer in connection with use of the account.</li><li>“PIN” means the Personal Identification Number required to gain access via an ATM terminal or Point of Sale terminal to give a transaction instruction.</li></ol><br>If you have any questions about this privacy and security statement, please email us on customerservice@www.co-opbank.co.ke',
        ]);

        Terms::create([
            'title' => 'Asset Finance T&Cs',
            'description' => 'Cillum cupidatat incididunt nulla laborum consectetur pariatur nulla velit voluptate pariatur qui fugiat anim. Consequat ipsum consectetur est est incididunt ex. Nisi pariatur ex occaecat dolor tempor enim occaecat. In nisi culpa consectetur veniam dolor cillum sit et consectetur. Cillum cupidatat incididunt nulla laborum consectetur pariatur nulla velit voluptate pariatur qui fugiat anim. Consequat ipsum consectetur est est incididunt ex. Nisi pariatur ex occaecat dolor tempor enim occaecat. In nisi culpa consectetur veniam dolor cillum sit et consectetur. Cillum cupidatat incididunt nulla laborum consectetur pariatur nulla velit voluptate pariatur qui fugiat anim. Consequat ipsum consectetur est est incididunt ex. Nisi pariatur ex occaecat dolor tempor enim occaecat. In nisi culpa consectetur veniam dolor cillum sit et consectetur. <br><br> Cillum cupidatat incididunt nulla laborum consectetur pariatur nulla velit voluptate pariatur qui fugiat anim. Consequat ipsum consectetur est est incididunt ex. Nisi pariatur ex occaecat dolor tempor enim occaecat. In nisi culpa consectetur veniam dolor cillum sit et consectetur. Cillum cupidatat incididunt nulla laborum consectetur pariatur nulla velit voluptate pariatur qui fugiat anim. Consequat ipsum consectetur est est incididunt ex. Nisi pariatur ex occaecat dolor tempor enim occaecat. In nisi culpa consectetur veniam dolor cillum sit et consectetur. Cillum cupidatat incididunt nulla laborum consectetur pariatur nulla velit voluptate pariatur qui fugiat anim. Consequat ipsum consectetur est est incididunt ex. Nisi pariatur ex occaecat dolor tempor enim occaecat. In nisi culpa consectetur veniam dolor cillum sit et consectetur. <br><br> Cillum cupidatat incididunt nulla laborum consectetur pariatur nulla velit voluptate pariatur qui fugiat anim. Consequat ipsum consectetur est est incididunt ex. Nisi pariatur ex occaecat dolor tempor enim occaecat. In nisi culpa consectetur veniam dolor cillum sit et consectetur. Cillum cupidatat incididunt nulla laborum consectetur pariatur nulla velit voluptate pariatur qui fugiat anim. Consequat ipsum consectetur est est incididunt ex. Nisi pariatur ex occaecat dolor tempor enim occaecat. In nisi culpa consectetur veniam dolor cillum sit et consectetur. Cillum cupidatat incididunt nulla laborum consectetur pariatur nulla velit voluptate pariatur qui fugiat anim. Consequat ipsum consectetur est est incididunt ex. Nisi pariatur ex occaecat dolor tempor enim occaecat. In nisi culpa consectetur veniam dolor cillum sit et consectetur.',
        ]);
    }
}

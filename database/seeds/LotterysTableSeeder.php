<?php
use Illuminate\Database\Seeder;
class LotterysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $quoteArr = ["A bank is a place that will lend you money if you can prove that you don't need it.","A banker is a fellow who lends you his umbrella when the sun is shining and wants it back the minute it begins to rain.","A man is usually more careful of his money than he is of his principles.","A wise man should have money in his head, but not in his heart.","Do not be fooled into believing that because a man is rich he is necessarily smart. There is ample proof to the contrary.","Endless money forms the sinews of war.","Finance is the art of passing money from hand to hand until it finally disappears.","Give me the strength to change the things I can, the grace to accept the things I cannot, and a great big bag of money.","He that is of the opinion money will do everything may well be suspected of doing everything for money.","I have enough money to last me the rest of my life, unless I buy something.","If women didn't exist, all the money in the world would have no meaning.","If you can count your money, you don't have a billion dollars.","If you want to know what god thinks of money, just look at the people he gave it to.","I'm living so far beyond my income that we may almost be said to be living apart.","Lack of money is no obstacle. Lack of an idea is an obstacle.","Lack of money is the root of all evil.","Make money your god and it will plague you like the devil.","Money can't buy friends, but it can get you a better class of enemy.","Money frees you from doing things you dislike. Since I dislike doing nearly everything, money is handy.","Money is better than poverty, if only for financial reasons.","Money is like a sixth sense without which you cannot make a complete use of the other five.","Money speaks sense in a language all nations understand.","My problem lies in reconciling my gross habits with my net income.","No man's credit is as good as his money.","One man's wage increase is another man's price increase.","One must be poor to know the luxury of giving.","Riches may enable us to confer favors, but to confer them with propriety and grace requires a something that riches cannot live.","Save a little money each month and at the end of the year you'll be surprised at how little you have.","Someday I want to be rich. Some people get so rich they lose all respect for humanity. That's how rich I want to be.","The art of living easily as to money is to pitch your scale of living one degree below your means.","The easiest way for your children to learn about money is for you not to have any.","The safest way to double your money is to fold it over and put it in your pocket.","When it is a question of money, everybody is of the same religion."];



        for($i = 0;$i <= 26;$i++) {

       	$lottery = new \App\Models\Lottery();
        $lottery->title = 'Lottery #'.$i;
        $lottery->content = $quoteArr[array_rand($quoteArr)];
        $lottery->init_value = 1000 * $i + 1000;
        $lottery->current_value = 1000 * $i + 1000;
        if($i < 9){
        	$lottery->end_date = date("Y-m-d ") .'0'. $i .':00:00';
    	}
    	else{
    		$lottery->end_date = date("Y-m-d ") . $i .':00:00';
    	}
        $lottery->user_id = 1;
        $lottery->save();
    	}
    }
}

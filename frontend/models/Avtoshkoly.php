<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "avtoshkoly".
 *
 * @property int $id
 * @property string $name
 * @property string $logo
 * @property string $card
 * @property string $text
 * @property string $adress
 * @property string $phone
 * @property string $mail
 * @property string $price_schools
 * @property string $sale
 * @property string $lesson_length
 * @property string $lessons_grafic
 * @property string $additional_lesson
 * @property string $autopark
 * @property string $date_register
 * @property string $date_birth
 * @property int $hide
 * @property string $category_widget
 * @property string $zone_widget
 * @property string $price_widget
 * @property string $link
 * @property string $site
 * @property string $title
 * @property string $price_plus
 * @property string $lessons_schedule
 */
class Avtoshkoly extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'avtoshkoly';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'logo', 'card', 'text', 'adress', 'phone', 'mail', 'price_schools', 'sale', 'lesson_length', 'lessons_grafic', 'additional_lesson', 'autopark', 'category_widget', 'price_widget', 'link', 'site', 'title', 'price_plus', 'lessons_schedule'], 'required'],
            [['text', 'adress', 'price_schools', 'autopark'], 'string'],
            [['date_register'], 'safe'],
            [['date_birth'], 'integer'],
            [['name', 'logo', 'card', 'phone', 'mail', 'sale', 'lesson_length', 'lessons_grafic', 'additional_lesson', 'zone_widget', 'price_widget', 'link', 'site', 'title', 'price_plus', 'lessons_schedule'], 'string', 'max' => 255],
            [['hide'], 'string', 'max' => 11],
            [['category_widget'], 'string', 'max' => 25],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'logo' => 'Logo',
            'card' => 'Card',
            'text' => 'Text',
            'adress' => 'Adress',
            'phone' => 'Phone',
            'mail' => 'Mail',
            'price_schools' => 'Price Schools',
            'sale' => 'Sale',
            'lesson_length' => 'Lesson Length',
            'lessons_grafic' => 'Lessons Grafic',
            'additional_lesson' => 'Additional Lesson',
            'autopark' => 'Autopark',
            'date_register' => 'Date Register',
            'date_birth' => 'Date Birth',
            'hide' => 'Hide',
            'category_widget' => 'Category Widget',
            'zone_widget' => 'Zone Widget',
            'price_widget' => 'Price Widget',
            'link' => 'Link',
            'site' => 'Site',
            'title' => 'Title',
            'price_plus' => 'Price Plus',
            'lessons_schedule' => 'Lessons Schedule',
        ];
    }
}

<?php
declare(strict_types=1);
require_once 'countSum.php';


class Product
{
    public function __construct(string $title, ?float $price = null, array $components = null)
    {
        $this->title = $title;
        if($components)
        {
            $this->addComponents($components);
        }
        else $this->price = $price;
    }


    public string $title;
    private float $price;
    private array $components = [];

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return array
     */
    public function getComponents(): array
    {
        return $this->components;
    }

    /**
     * @param float|null $price
     */
    public function setPrice(?float $price): void
    {
        if(count($this->components) == 0) throw new Error('У вас имеются компоненты! Изменяйте соответствующую цену комонента!');
        $this->price = $price;
    }



    public function addComponents(array $components): void
    {
        if(count($components) + count($this->components) <= 1) throw  new Error('Количество Компонентов должно быть больше одного!');
        $this->price = countSum($components, $this->price);
        $this->components = [...$this->components, ...$components];
    }
    function deleteComponents($component): void
    {
        if(is_array($component)){
            $minusPrice = 0;
            $this->components = array_filter($this->components, function(Product $el) use($component, &$minusPrice){
                foreach ($component as $value ){
                    if($this->findComponentForDel($el, $value)) return false;
                }
                return true;
            });
            $this->price -= $minusPrice;
        }
        elseif ($component instanceof Product){
            $this->components = array_filter($this->components, fn(Product $el) => !($this->findComponentForDel($el, $component)));
        }
        else throw new Error('Компонент должен быть массивом либо объектом класса Product!');
    }
    private function findComponentForDel(Product $component, Product $compareComp): bool {
        if ($component->title == $compareComp->title){
            $this->price -= $component->price;
            return true;
        }
        return false;
    }
}

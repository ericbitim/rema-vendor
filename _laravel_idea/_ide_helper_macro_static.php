<?php
/** @noinspection PhpUndefinedClassInspection */
/** @noinspection PhpFullyQualifiedNameUsageInspection */

namespace Illuminate\Contracts\View {

    /**
     * @method static $this layoutData($data = [])
     * @method static $this layout($view, $params = [])
     * @method static $this extends($view, $params = [])
     * @method static $this section($section)
     * @method static $this slot($slot)
     */
    class View {}
}

namespace Illuminate\Http {

    /**
     * @method static array validate(array $rules, ...$params)
     * @method static array validateWithBag(string $errorBag, array $rules, ...$params)
     * @method static bool hasValidSignature($absolute = true)
     * @method static bool hasValidRelativeSignature()
     * @method static bool hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
     */
    class Request {}
}

namespace Illuminate\Support {

    /**
     * @method static $this sortByDate(string $column = 'created_at', bool $descending = true)
     */
    class Collection {}
}

namespace Illuminate\Testing {

    /**
     * @method static $this assertSeeLivewire($component)
     * @method static $this assertDontSeeLivewire($component)
     */
    class TestResponse {}

    /**
     * @method static $this assertSeeLivewire($component)
     * @method static $this assertDontSeeLivewire($component)
     */
    class TestView {}
}

namespace Illuminate\View {

    use Livewire\WireDirective;

    /**
     * @method static WireDirective wire($name)
     */
    class ComponentAttributeBag {}

    /**
     * @method static $this layoutData($data = [])
     * @method static $this layout($view, $params = [])
     * @method static $this extends($view, $params = [])
     * @method static $this section($section)
     * @method static $this slot($slot)
     */
    class View {}
}

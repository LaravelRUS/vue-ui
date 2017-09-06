<h2>
    <a href="#checkbox" name="checkbox" class="anchor"></a>
    Checkbox
</h2>

<h3>Свойства</h3>

<table>
    <thead>
        <tr>
            <td>Название</td>
            <td>Тип</td>
            <td>Значение по умолчанию</td>
            <td>Описание</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>disabled</code></td>
            <td><code>Boolean</code></td>
            <td><code>false</code></td>
            <td>Отключаем чекбокс</td>
        </tr>
        <tr>
            <td><code>title</code></td>
            <td><code>String</code></td>
            <td><code>null</code></td>
            <td>Текст тултипа</td>
        </tr>
        <tr>
            <td><code>name</code></td>
            <td><code>String</code></td>
            <td><code>""</code></td>
            <td>Имя компонента</td>
        </tr>
        <tr>
            <td><code>checked</code></td>
            <td><code>Boolean</code></td>
            <td><code>false</code></td>
            <td>Поставить галочку изначально</td>
        </tr>
    </tbody>
</table>

<h3>События</h3>

<table>
    <thead>
        <tr>
            <td>Название</td>
            <td>Описание</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>@change</code></td>
            <td>Происходит при изменении состояния <code>checked</code></td>
        </tr>
    </tbody>
</table>

<h3>Примеры</h3>

<table class="examples">
    <thead>
        <tr>
            <td>Тип</td>
            <td>Пример</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <code>&lt;ui-checkbox&gt;</code>
            </td>
            <td>
                <ui-checkbox>Checkbox</ui-checkbox>
            </td>
        </tr>
        <tr>
            <td>
                <code>&lt;ui-checkbox title="Hover me"&gt;</code>
            </td>
            <td>
                <ui-checkbox title="Hover me">Checkbox</ui-checkbox>
            </td>
        </tr>
        <tr>
            <td>
                <code>&lt;ui-checkbox :checked="true"&gt;</code>
            </td>
            <td>
                <ui-checkbox :checked="true">Checked</ui-checkbox>
            </td>
        </tr>
        <tr>
            <td>
                <code>&lt;ui-checkbox :disabled="true"&gt;</code>
            </td>
            <td>
                <ui-checkbox :checked="true" :disabled="true">
                    По-настоящему CSS расшифровывается
                    как «Ceaseless Screaming of the Sinner»
                </ui-checkbox>
            </td>
        </tr>
    </tbody>
</table>

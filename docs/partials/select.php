<h2>
    <a href="#select" name="select" class="anchor"></a>
    Select и Option
</h2>

<h3>Свойства select</h3>

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
            <td>Отключение доступа к выпадашке</td>
        </tr>
        <tr>
            <td><code>loading</code></td>
            <td><code>Boolean</code></td>
            <td><code>false</code></td>
            <td>Показывать индикатор загрузки</td>
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
            <td><code>null</code></td>
            <td>Имя компонента</td>
        </tr>
        <tr>
            <td><code>active</code></td>
            <td><code>Boolean</code></td>
            <td><code>false</code></td>
            <td>Сделать выпаджашку активной (раскрыть)</td>
        </tr>
        <tr>
            <td><code>size</code></td>
            <td><code>Number</code></td>
            <td><code>5</code></td>
            <td>Максимальное видимое количество элементов в списке</td>
        </tr>
        <tr>
            <td><code>placeholder</code></td>
            <td><code>String</code></td>
            <td><code>"Select a value..."</code></td>
            <td>Текст в выпадашке без выбранного значения</td>
        </tr>
    </tbody>
</table>

<h3>Свойства option</h3>

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
            <td>Отключение доступа к элементу выпадашки</td>
        </tr>
        <tr>
            <td><code>loading</code></td>
            <td><code>Boolean</code></td>
            <td><code>false</code></td>
            <td>Показывать индикатор загрузки</td>
        </tr>
        <tr>
            <td><code>title</code></td>
            <td><code>String</code></td>
            <td><code>null</code></td>
            <td>Текст тултипа</td>
        </tr>
        <tr>
            <td><code>value</code></td>
            <td><code>Any</code></td>
            <td><code>null</code></td>
            <td>Значение выбранного элмента. При выборе элемента значение передаётся в select</td>
        </tr>
        <tr>
            <td><code>default</code></td>
            <td><code>Boolean</code></td>
            <td><code>false</code></td>
            <td>При указании значения true - поле выбирается по умолчанию</td>
        </tr>
        <tr>
            <td><code>text</code></td>
            <td><code>String</code></td>
            <td><code>""</code></td>
            <td>
                Текст, который будет выбран в качестве заголовка родительского select,
                в случае, если в качестве значения передан не текст, а DOM элемент.
            </td>
        </tr>
    </tbody>
</table>

<h3>События select</h3>

<table>
    <thead>
        <tr>
            <td>Название</td>
            <td>Описание</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>@open</code></td>
            <td>Происходит при открытии выпадашки</td>
        </tr>
        <tr>
            <td><code>@close</code></td>
            <td>Происходит при закрытии выпадашки</td>
        </tr>
        <tr>
            <td><code>@toggle</code></td>
            <td>Происходит при смении состояния выпадашки</td>
        </tr>
        <tr>
            <td><code>@select</code></td>
            <td>Происходит при выборе значения выпадашки</td>
        </tr>
    </tbody>
</table>

<h3>События option</h3>

<table>
    <thead>
        <tr>
            <td>Название</td>
            <td>Описание</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>@select</code></td>
            <td>Происходит при выборе элемента</td>
        </tr>
    </tbody>
</table>

<h3>Примеры</h3>

<table>
    <thead>
        <tr>
            <td>Тип</td>
            <td>Пример</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <pre><code><?=htmlspecialchars('<ui-select :size="4" :active="true">
    <ui-option value="1">Value</ui-option>
    <ui-option value="2" :disabled="true">Disabled</ui-option>
    <ui-option value="3" :loading="true">Loading...</ui-option>
    <ui-option value="4" title="Hover me">Hover me</ui-option>
    <ui-option value="5">
        Very long text ololololololol
    </ui-option>
    <ui-option value="6">
        <strong>Without text</strong>
    </ui-option>
    <ui-option text="This is custom text" value="7">
        <strong>With text</strong>
    </ui-option>
</ui-select>')?></code></pre>
            </td>
            <td>
                <ui-select :size="4" :active="true">
                    <ui-option value="1">Value</ui-option>
                    <ui-option value="2" :disabled="true">Disabled</ui-option>
                    <ui-option value="3" :loading="true">Loading...</ui-option>
                    <ui-option value="4" title="Hover me">Hover me</ui-option>
                    <ui-option value="5">
                        Very long text ololololololol
                    </ui-option>
                    <ui-option value="6">
                        <strong>Without text</strong>
                    </ui-option>
                    <ui-option text="This is custom text" value="7">
                        <strong>With text</strong>
                    </ui-option>
                </ui-select>
            </td>
        </tr>
        <tr>
            <td>
                <pre><code><?=htmlspecialchars('<ui-select :disabled="true">
    <ui-option :default="true" value="1">Selected value</ui-option>
    <ui-option value="2">Other value</ui-option>
</ui-select>')?></code></pre>
            </td>
            <td>
                <ui-select :disabled="true">
                    <ui-option :default="true" value="1">Selected value</ui-option>
                    <ui-option value="2">Other value</ui-option>
                </ui-select>
            </td>
        </tr>
        <tr>
            <td>
                <pre><code><?=htmlspecialchars('<ui-select :loading="true" title="Tooltip example text">
    <ui-option :default="true" value="1">Selected value</ui-option>
</ui-select>')?></code></pre>
            </td>
            <td>
                <ui-select :loading="true" title="Tooltip example text">
                    <ui-option value="1">This is an example</ui-option>
                </ui-select>
            </td>
        </tr>
    </tbody>
</table>

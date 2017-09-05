<h2>
    <a href="#button" name="button" class="anchor"></a>
    Button
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
            <td>Отключаем кнопку/ссылку</td>
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
            <td><code>""</code></td>
            <td>Имя компонента</td>
        </tr>
        <tr>
            <td><code>type</code></td>
            <td>
                Одно из:
                <ul>
                    <li><code>"primary"</code></li>
                    <li><code>"simple"</code></li>
                </ul>
            </td>
            <td><code>"primary"</code></td>
            <td>Тип стиля кнопки</td>
        </tr>
        <tr>
            <td><code>href</code></td>
            <td><code>String</code></td>
            <td><code>null</code></td>
            <td>Если указан href, то кнопка будет ссылкой</td>
        </tr>
        <tr>
            <td><code>target</code></td>
            <td>
                Одно из:
                <ul>
                    <li><code>"blank"</code></li>
                    <li><code>"parent"</code></li>
                    <li><code>"self"</code></li>
                    <li><code>"top"</code></li>
                </ul>
            </td>
            <td><code>"self"</code></td>
            <td>Атрибут target для ссылки, если указан атрибут href</td>
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
            <td><code>@click</code></td>
            <td>Происходит при нажатии на кнопку</td>
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
                <code>&lt;ui-button&gt;</code>
            </td>
            <td>
                <ui-button>Primary</ui-button>
            </td>
        </tr>
        <tr>
            <td>
                <code>&lt;ui-button title="Hover me"&gt;</code>
            </td>
            <td>
                <ui-button title="Hover me">Primary</ui-button>
            </td>
        </tr>
        <tr>
            <td>
                <code>&lt;ui-button :disabled="true"&gt;</code>
            </td>
            <td>
                <ui-button :disabled="true">Primary</ui-button>
            </td>
        </tr>
        <tr>
            <td>
                <code>&lt;ui-button :loading="true"&gt;</code>
            </td>
            <td>
                <ui-button :loading="true">Loading&hellip;</ui-button>
            </td>
        </tr>
        <tr>
            <td>
                <code>&lt;ui-button type="simple"&gt;</code>
            </td>
            <td>
                <ui-button type="simple">Simple</ui-button>
            </td>
        </tr>
        <tr>
            <td>
                <code>&lt;ui-button type="simple" :disabled="true"&gt;</code>
            </td>
            <td>
                <ui-button type="simple" :disabled="true">Simple</ui-button>
            </td>
        </tr>
        <tr>
            <td>
                <code>&lt;ui-button type="simple" :loading="true"&gt;</code>
            </td>
            <td>
                <ui-button type="simple" :loading="true">Loading&hellip;</ui-button>
            </td>
        </tr>
    </tbody>
</table>

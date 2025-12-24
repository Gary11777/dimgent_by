<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отправка контактной формы</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: white;
            padding: 30px;
            border-radius: 8px 8px 0 0;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            background: #f8fafc;
            padding: 30px;
            border: 1px solid #e2e8f0;
            border-top: none;
            border-radius: 0 0 8px 8px;
        }
        .field {
            margin-bottom: 20px;
        }
        .field-label {
            font-weight: 600;
            color: #64748b;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 5px;
        }
        .field-value {
            background: white;
            padding: 12px 15px;
            border-radius: 6px;
            border: 1px solid #e2e8f0;
        }
        .message-box {
            background: white;
            padding: 20px;
            border-radius: 6px;
            border: 1px solid #e2e8f0;
            white-space: pre-wrap;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #94a3b8;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Запрос с сайта dimgent.by</h1>
    </div>
    
    <div class="content">
        <div class="field">
            <div class="field-label">Отправитель</div>
            <div class="field-value">{{ $data['name'] }} &lt;{{ $data['email'] }}&gt;</div>
        </div>
        
        @if(!empty($data['company']))
        <div class="field">
            <div class="field-label">Компания</div>
            <div class="field-value">{{ $data['company'] }}</div>
        </div>
        @endif
        
        <div class="field">
            <div class="field-label">Тема</div>
            <div class="field-value">
                @php
                    $subjectMap = [
                        'project' => 'Новый проект',
                        'product' => 'Информация о продукте (Garand 101)',
                        'services' => 'Консультация по услугам',
                        'partnership' => 'Партнерское предложение',
                        'other' => 'Другое',
                    ];
                @endphp
                {{ $subjectMap[$data['subject']] ?? $data['subject'] }}
            </div>
        </div>
        
        <div class="field">
            <div class="field-label">Сообщение</div>
            <div class="message-box">{{ $data['message'] }}</div>
        </div>
    </div>
    
    <div class="footer">
        <p>Это сообщение было отправлено через форму контактов на dimgent.by</p>
        <p>Дата и время отправки: {{ now()->format('d.m.Y H:i T') }} (Мск)</p>
    </div>
</body>
</html>

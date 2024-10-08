@if(is_default_lang())
    <div class="panel">
        <div class="panel-title"><strong>{{__("OpenAI Settings")}}</strong></div>
        <div class="panel-body">
            <div class="form-group">
                <label class="">{{__("API Key")}}</label>
                <div class="form-controls">
                    <input
                        type="text" name="ai_api_key" value="{{ setting_item('ai_api_key') }}" class="form-control"
                    >
                </div>
                <p>
                    <i>
                        <a
                            href="https://www.maisieai.com/help/how-to-get-an-openai-api-key-for-chatgpt" target="_blank"
                        >How to get OpenAI api key
                        </a>
                    </i>
                </p>
            </div>
            <div class="form-group">
                <label class="">{{__("Model Name")}}</label>
                <div class="form-controls">
                    <input
                        type="text" name="ai_model_name" value="{{ setting_item('ai_model_name','gpt-3.5-turbo-1106') }}" class="form-control"
                    >
                </div>
            </div>
        </div>
    </div>
@endif
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

<div class="container">
  <div class="row align-items-center">
    <div class="col-md-6">
      <h3 class="sub-title" style="box-sizing: border-box; color: var(--secondary); font-family: Jost, sans-serif; font-weight: 400; clear: both; margin: 0px 0px 13px; font-size: 18px; line-height: 1.2; text-transform: capitalize; background-color: #ffffff;">Who We Are</h3>
      <h2 class="title" style="box-sizing: border-box; color: var(--heading); font-family: Outfit, sans-serif; clear: both; margin: 0px 0px 15px; font-size: 42px; line-height: 1.2; display: inline-block; text-transform: capitalize; white-space-collapse: preserve-breaks; background-color: #ffffff; text-align: right;">Natural World Adventure</h2>
      <p class="description" style="box-sizing: border-box; line-height: var(--line-height); margin: 0px 0px 15px; white-space-collapse: preserve-breaks; color: #444444; font-family: Jost; font-size: 16px; background-color: #ffffff;">Natural World Adventure is a travel agency founded in 2022. The company specializes in designing unique travel and tour experiences locally and internationally, offering inbound and outbound tours and travel services for both companies and individuals.</p>
    </div>
    <div class="col-md-6">
      <img src="../../../../uploads/demo/tour/tour-7.jpg" alt="test" class="img-fluid" style="max-width: 100%; height: auto;">
    </div>
  </div>
</div>

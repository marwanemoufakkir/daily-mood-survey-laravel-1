@extends('app')

@section('content')
  <div id="new-survey-container">
  </div>


  <script type="text/babel">
    // Parent New Survey component responsible for fetching object from endpoint
    // as well as posting completed form
    var NewSurvey = React.createClass({
      getInitialState: function() {
        return {
          survey: [],
            question_1_response: null,
            question_2_response: null,
            question_3_response: null,
            question_4_response: null,
            question_5_response: null,
            question_6_response: null,
            question_7_response: null,
            question_8_response: null,
            question_9_response: null,
            question_10_response: null,
            question_11_response: null,
            question_12_response: null,
            question_13_response: null,
            question_14_response: null,
            question_15_response: null,
            question_16_response: null,
            question_17_response: null,
            question_18_response: null,
            question_19_response: null,
            question_20_response: null,
            question_21_response: null,
            question_22_response: null,
            question_23_response: null,
            question_24_response: null,
            question_25_response: null,
            question_26_response: null,
            question_27_response: null,
            question_28_response: null,
            question_29_response: null,
            question_30_response: null,
            question_31_response: null,
            question_32_response: null,
            question_33_response: null,
        };
      },

      componentWillMount: function() {
        this._getNewSurvey();
      },

      _getNewSurvey: function() {
        $.get('/surveys/new', function(data) {
          this.setState({ survey: data });
        }.bind(this));
      },
      handleRadioClick: function(questionNumber, response) {
        this.setState({[questionNumber]: response});
      },

      handleSurveySubmit: function() {
        $.post('/surveys',
          {
            question_1_response: this.state.question_1_response,
            question_2_response: this.state.question_2_response,
            question_3_response: this.state.question_3_response,
            question_4_response: this.state.question_4_response,
            question_5_response: this.state.question_5_response,
            question_6_response: this.state.question_6_response,
            question_7_response: this.state.question_7_response,
            question_8_response: this.state.question_8_response,
            question_9_response: this.state.question_9_response,
            question_10_response: this.state.question_10_response,
            question_11_response: this.state.question_11_response,
            question_12_response: this.state.question_12_response,
            question_13_response: this.state.question_13_response,
            question_14_response: this.state.question_14_response,
            question_15_response: this.state.question_15_response,
            question_16_response: this.state.question_16_response,
            question_17_response: this.state.question_17_response,
            question_18_response: this.state.question_18_response,
            question_19_response: this.state.question_19_response,
            question_20_response: this.state.question_20_response,
            question_21_response: this.state.question_21_response,
            question_22_response: this.state.question_22_response,
            question_23_response: this.state.question_23_response,
            question_24_response: this.state.question_24_response,
            question_25_response: this.state.question_25_response,
            question_26_response: this.state.question_26_response,
            question_27_response: this.state.question_27_response,
            question_28_response: this.state.question_28_response,
            question_29_response: this.state.question_29_response,
            question_30_response: this.state.question_30_response,
            question_31_response: this.state.question_31_response,
            question_32_response: this.state.question_32_response,
            question_33_response: this.state.question_33_response,
          })
          .done(function(data) {
            var loc = window.location;
            window.location = "/daily-surveys/" + data.id;
          });
      },

      render: function() {
        var submitButton
        var question_nums = ['1', '2', '3', '4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33'];
        var surveyItems = question_nums.map(function(num) {
          return <SurveyQuestion
            key={num}
            survey={this.state.survey}
            question_num={num}
            onRadioClick={this.handleRadioClick}
          />
        }.bind(this));
        if(this.state.question_1_response && this.state.question_2_response && this.state.question_3_response && this.state.question_4_response && this.state.question_5_response && this.state.question_6_response && this.state.question_7_response && this.state.question_8_response && this.state.question_9_response && this.state.question_10_response && this.state.question_11_response && this.state.question_12_response && this.state.question_13_response && this.state.question_14_response && this.state.question_15_response && this.state.question_16_response && this.state.question_17_respons && ethis.state.question_18_response && this.state.question_19_response && this.state.question_20_response && this.state.question_21_response && this.state.question_22_response && this.state.question_23_response && this.state.question_24_response && this.state.question_25_response && this.state.question_26_respons && ethis.state.question_27_response && this.state.question_28_response && this.state.question_29_response && this.state.question_30_response && this.state.question_31_response && this.state.question_32_response && this.state.question_33_response){
          submitButton = <button className='btn btn-primary btn-lg btn-block' onClick={this.handleSurveySubmit}> Submit </button>;
        }

        return (
          <div>
            {surveyItems}
            <div className="row">
              <div className="col-md-4" />
              <div className="col-md-4 text-center">
                {submitButton}
              </div>
              <div className="col-md-4" />
            </div>
          </div>
        );
        }
    });

    // New Survey Question component programmatically generated with question text
    var SurveyQuestion = React.createClass({
      getInitialState: function() {
        return {
        };
      },

      radioClick: function(e) {
        var questionNumber = e.target.name;
        var selection = e.target.value;
        this.props.onRadioClick(questionNumber, selection);
      },

      render: function() {
        console.log(this.props.survey)
        var questionText = "question_" + this.props.question_num;
       
        return(
          <div>
            <div className="row">
              <div className="col-md-4" />
              <div className="col-md-4 text-center">
                <div className="panel panel-default">
                  <div className="panel-heading">
                    <div className="panel-title">
                      {this.props.question_num} - {this.props.survey[questionText]}
                    </div>
                  </div>
                  <div className="panel-body">
                    <div className="control-group">
                      
                      <label className="radio">
                        <input type="radio" name={"question_"+ this.props.question_num +"_response"} onClick={this.radioClick} value="1" />{this.props.survey[questionText]}
                      </label>
                      <label className="radio">
                        <input type="radio" name={"question_"+ this.props.question_num +"_response"} onClick={this.radioClick} value="2" /> 2
                      </label>
                      <label className="radio">
                        <input type="radio" name={"question_"+ this.props.question_num +"_response"} onClick={this.radioClick} value="3" /> 3
                      </label>
                      <label className="radio">
                        <input type="radio" name={"question_"+ this.props.question_num +"_response"} onClick={this.radioClick} value="4" /> 4
                      </label>
                      <label className="radio">
                        <input type="radio" name={"question_"+ this.props.question_num +"_response"} onClick={this.radioClick} value="5" /> 5
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div className="col-md-4" />
            </div>
          </div>
        );
      }
    });


    ReactDOM.render(
      <NewSurvey />,
      document.getElementById('new-survey-container')
    );
  </script>
@endsection

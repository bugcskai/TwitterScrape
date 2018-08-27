<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://unpkg.com/react@16/umd/react.production.min.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js" crossorigin></script>
    <script src="https://unpkg.com/babel-standalone@6.26.0/babel.js"></script>

    <title>Hello, Twitter (React Version) - by Kai!</title>
  </head>
  <body>    
    <main role="main">

      <div id="root"></div>

      <script type="text/babel">
          // React code will go here

          const TableHeader = () => { 
              return (
                  <thead>
                      <tr>
                          <th>Name</th>
                          <th>Job</th>
                      </tr>
                  </thead>
              );
          }

          const TableBody = props => { 
              const rows = props.characterData.map((row, index) => {
                  return (
                      <tr key={index}>
                          <td>{row.name}</td>
                          <td>{row.job}</td>
                      </tr>
                  );
              });

              return <tbody>{rows}</tbody>;
          }

          class Table extends React.Component {
              render() {
                  const { characterData } = this.props;

                  return (
                      <table class="table">
                          <TableHeader />
                          <TableBody characterData={characterData} />
                      </table>
                  );
              }
          }


          class App extends React.Component {


              render() { 
                  const characters = [
                      {
                          'name': 'Charlie',
                          'job': 'Janitor'
                      },
                      {
                          'name': 'Mac',
                          'job': 'Bouncer'
                      },
                      {
                          'name': 'Dee',
                          'job': 'Aspring actress'
                      },
                      {
                          'name': 'Dennis',
                          'job': 'Bartender'
                      }
                  ];

                  return (
                  <section class="jumbotron text-center">
                    <div class="container">
                     <h1>Hello, Twitter!</h1>
                    </div>
                    <form action="tweetsearch.php" class="text-left">
                      <div class="form-group">
                        <label for="user">User Search</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                          </div>
                        <input type="text" class="form-control" id="user" placeholder="Hello" value="KidspotSocial" name="user" />
                        </div>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-primary" type="submit">Search</button>
                      </div>
                      <input type="hidden" name="getsample" value="1" />
                    </form>

                    <div class="container">  
                      <Table characterData={characters} ></Table>
                    </div>


                  </section>
                  ); 
              } 
          }

          ReactDOM.render(<App />, document.getElementById('root'));
      </script>
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script type="text/javascript" src="script.js"></script>
  </body>
</html>
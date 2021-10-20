import React from "react";

import { Link, useLocation } from "react-router-dom";

import { Route, Switch } from "react-router-dom";
import { Login } from "./Auth/Login";
import { Register } from "./Auth/Register";
import Logo from "./Logo/Logo";
import Logout from "./Logout";

export const Main = () => {
  let location = useLocation();
  return (
    <>
      <div className="containerMain">
        <Logo />
        {localStorage.getItem("jwt") && (
          <h2>
            Bonjour,{" "}
            <b>
              {localStorage.getItem("nom")} {localStorage.getItem("prenom")}
            </b>{" "}
            !
          </h2>
        )}
        {localStorage.getItem("jwt") ? (
          <button onClick={Logout} className="btn btn-login">
            Se déconnecter
          </button>
        ) : (
          <Link to={`${location.pathname}/login`} className="btn btn-login">
            Se connecter
          </Link>
        )}
      </div>

      <Switch>
        <Route path="/accueil/login" component={Login} />
        <Route path="/accueil/register" component={Register} />
      </Switch>
    </>
  );
};
